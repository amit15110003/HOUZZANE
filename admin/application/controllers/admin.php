<?php
class admin extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
		$details['query'] = $this->user->get_client();
        
		$this->load->view('header');
		$this->load->view('dashbord',$details);
		$this->load->view('footer');
	}

	public function client()
	{
		$details['query'] = $this->user->get_client();
        
		$this->load->view('header');
		$this->load->view('viewuser',$details);
		$this->load->view('footer');
	}

	
	public function image()
	{	
		$this->load->view('imagemap');
		
	/*	
			$this->form_validation->set_rules('imagemap', 'imagemap', 'required');
			

			if ($this->form_validation->run() == FALSE)
        {
     		$this->load->view('headermap');
			$this->load->view('imagemap');
        }
		else
		{
			$data = array(
				
				'imagemap' => $this->input->post('imagemap')
			);
		if ($this->user->insert_image($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin');
			}
		
	}*/
	}

	public function category()
	{	$this->form_validation->set_rules('category', 'category', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showcategory();
     		$this->load->view('header');
		$this->load->view('category',$details);
		$this->load->view('footer');
        }
		else
		{
			$data = array(
				'category' => $this->input->post('category')
			);
		if ($this->user->insert_category($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/category');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/category');
			}
		}
	
		
	}
	public function Deletecategory($id)
	{
			
		$details['query']=$this->user->showcategory();
     		$this->load->view('header');
		$this->load->view('category',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletecategory($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/category');
	 
	}

	public function architect()
	{	$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showcategory();
        	$details['query1']=$this->user->showarchitect();
     		$this->load->view('header');
		$this->load->view('architect',$details);
		$this->load->view('footer');
        }
		else
		{
			
			$name=$_POST['name'];
		    $descr=$_POST['descr'];

		    $categorys = serialize($this->input->post('category'));


					    
			
			$result=$this->user->insert_architect( $name,$descr,$categorys);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/architect');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/architect');
			}
		}
	
		
	}
	public function Deletearchitect($id)
	{
			
		$details['query']=$this->user->showarchitect();
     		$this->load->view('header');
		$this->load->view('architect',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletearchitect($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/architect');
	 
	}


	public function library()
	{	$this->form_validation->set_rules('title', 'title', 'required');
		   
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showcategory();
        	$details['query1']=$this->user->showarchitect();
        	$details['query3']=$this->user->showspace();
        	$details['query4']=$this->user->showtype();
        	$details['query2']=$this->user->showlibrary();
     		$this->load->view('header');
		$this->load->view('library',$details);
		$this->load->view('footer');

        }
		else
		{
			
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['title'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }

			
			

			$data = array(
				
				'title' => $this->input->post('title'),
				'architect' => $this->input->post('architect'),
				'rate' => $this->input->post('rate'),
				'category' => $this->input->post('category'),
				'space' => $this->input->post('space'),
				'type' => $this->input->post('type'),
				'map' => $this->input->post('map'),
				'descr' => $this->input->post('descr'),
				'picture' => $picture
			);
		if($this->user->insert_library($data))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/library');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/library');
			}
		}
	
		
	}

	public function libraryedit($id)
	{	
	
		$this->form_validation->set_rules('title', 'title', 'required');
		   
		if ($this->form_validation->run() == FALSE)
        {
        	$data['query']=$this->user->showcategory();
        	$data['query1']=$this->user->showarchitect();
        	$details=$this->user->libraryedit($id);
        	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['title'] = $details[0]->title;
        	$data['architect'] = $details[0]->architect;
        	$data['map'] = $details[0]->map;
        	$data['rate'] = $details[0]->rate;
        	$data['category'] = $details[0]->category;
        	}
        else {
				$data['title'] = '';

			}
     		$this->load->view('header');
		$this->load->view('libraryedit',$data);
		$this->load->view('footer');
        }
		else
		{	
			$id=$_POST['id'];
			$data = array(
				
				'title' => $this->input->post('title'),
				'architect' => $this->input->post('architect'),
				'rate' => $this->input->post('rate'),
				'category' => $this->input->post('category'),
				'map' => $this->input->post('map')
			);
		if($this->user->insert_libraryedit($data,$id))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/library');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/library');
			}
		}
	
		
	}

	public function space()
	{	$this->form_validation->set_rules('space', 'space', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showspace();
     		$this->load->view('header');
		$this->load->view('space',$details);
		$this->load->view('footer');
        }
		else
		{
			$data = array(
				'space' => $this->input->post('space')
			);
		if ($this->user->insert_space($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/space');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/space');
			}
		}
	
		
	}
	public function Deletespace($id)
	{
			
		$details['query']=$this->user->showspace();
     		$this->load->view('header');
		$this->load->view('space',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletespace($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/space');
	 
	}

	public function type()
	{	$this->form_validation->set_rules('type', 'type', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->user->showtype();
     		$this->load->view('header');
		$this->load->view('type',$details);
		$this->load->view('footer');
        }
		else
		{
			$data = array(
				'type' => $this->input->post('type')
			);
		if ($this->user->insert_type($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/type');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('admin/type');
			}
		}
	
		
	}
	public function Deletetype($id)
	{
			
		$details['query']=$this->user->showtype();
     		$this->load->view('header');
		$this->load->view('type',$details);
		$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletetype($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('admin/type');
	 
	}
	 
		
}