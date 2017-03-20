<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
	}

	public function index()
	{
		include_once APPPATH."libraries/facebook-api-php-codexworld/facebook.php";
		
		// Facebook API Configuration
		$appId = '1746022392315343';
		$appSecret = '1cbd0d4d55ac434a0856819bc050183b';
		$redirectUrl = base_url() . '';
		$fbPermissions = 'email';
		
		//Call Facebook API
		$facebook = new Facebook(array(
		  'appId'  => $appId,
		  'secret' => $appSecret
		
		));
		$fbuser = $facebook->getUser();
		
        if ($fbuser) {
			$userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
            // Preparing data for database insertion
			$sess_data['oauth_provider'] = 'facebook';
			$sess_data['oauth_uid'] = $userProfile['id'];
            $sess_data['fname'] = $userProfile['first_name'];
            $sess_data['lname'] = $userProfile['last_name'];
            $sess_data['email'] = $userProfile['email'];
			$sess_data['gender'] = $userProfile['gender'];
			$sess_data['locale'] = $userProfile['locale'];
            $sess_data['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $sess_data['picture_url'] = $userProfile['picture']['data']['url'];
			// Insert or update user data
            $userID = $this->user->checkUser($sess_data);
            if(!empty($userID)){

                $data['userdata'] = $sess_data;
                
                $this->session->set_userdata($sess_data);
            } else {
               $data['userData'] = array();
            }
        } else {
			$fbuser = '';
            $data['authUrl'] = $facebook->getLoginUrl(array('redirect_uri'=>$redirectUrl,'scope'=>$fbPermissions));
        }
        $this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public function login()
    {
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($email,$password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'fname' => $uresult[0]->fname,'lname' => $uresult[0]->lname, 'uid' => $uresult[0]->id,'email'=> $uresult[0]->email,'contact'=> $uresult[0]->contact);

				$this->session->set_userdata($sess_data);
				
				redirect('');
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('');
			}
		}
    }

    public function designlibrary()
	{	
			$details['query']=$this->user->showcategory();
        	$details['query1']=$this->user->showarchitect();
        	$details['query3']=$this->user->showspace();
        	$details['query4']=$this->user->showtype();
        	$details['query2']=$this->user->showlibrary();
		 
		$this->load->view('dl',$details);  
		
	}

	public function counter($id, $view)
	{	
        	
			
				// $view = $data['view']+1;
				$view = $view + 1;

				$result=$this->user->insert_view($id,$view);
        
	}

	public function library($id)
	{	
        	$details=$this->user->showdesign($id);
		if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['title'] = $details[0]->title;
        	$data['architect'] = $details[0]->architect;
        	$data['rate'] = $details[0]->rate;
        	$data['view'] = $details[0]->view;
        	$data['space'] = $details[0]->space;
        	$data['descr'] = $details[0]->Descr;
        	$data['map'] = $details[0]->map;
			$data['picture'] = $details[0]->picture;
				
				$id = $data['id'];
				$view = $data['view']+1;

				$result=$this->user->insert_view($id,$view);
        }  
		$this->load->view('dl1',$data);
	}

	public function shortlist($id)
	{
	 
	 if($this->session->userdata('uid')){	
	  $r=$this->user->shortlist($id,$this->session->userdata('uid'));
	  if($r){
	  echo "Successfully shortlist";
	  }
	  else {
		  echo "Can Not shortlist";
	  }
	  
	  } 
	  
	  redirect('home/designlibrary');
	}


	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('');
	}
}
