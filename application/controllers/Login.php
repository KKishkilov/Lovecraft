<?php

class Login extends CI_Controller {
	public function __contstruct()
	{
		parent::__contstruct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','session'));
	 	 
	}
	public function index()
	{

		if(	$this->isLoggedIn()){
			redirect('dashboard');
		} 
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');


		$this->load->view('common/header', array());

			$this->form_validation->set_rules('email','Email', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login/login', array());
		}
		else
		{

			$this->processLogin();                
		}

     

	$this->load->view('common/footer');	
	}

	public function processLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		$result = $query->row();
		if($result && $result->id){
			$newdata = array(
          'email'     => $email,
        'logged_in' => TRUE
         );

$this->session->set_userdata($newdata);
			redirect('dashboard');
		}else{
			redirect('login');
		}
		//$email = $_POST['emaíl'];
	}
		
		public function logOut()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
  
   	  
   }