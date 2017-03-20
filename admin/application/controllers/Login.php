<?php
class login extends CI_Controller
{
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
		// get form input
		$name = $this->input->post("name");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("name", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			
			$this->load->view('login');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($name, $password);
			if (count($uresult) > 0)
			{
				// set session
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->name,'uid' => $uresult[0]->id);

				$this->session->set_userdata($sess_data);
				
				redirect("admin");
				
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
				redirect('login/index');
			}
		}
    }
}