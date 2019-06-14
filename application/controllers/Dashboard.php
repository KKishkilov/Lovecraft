<?php

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
	$this->load->library('session');

	
 
	}
	public function index(){
			 if(	!$this->isLoggedIn()){
		redirect('login');
	}
		$title = 'Dashboard';
		$result = $this->db->get('information');
		

	$this->load->view('common/header', array(
	       'title' => $title,
	));

	$this->load->view('common/navigation',array(
	));

	$this->load->view('dashboard/index', array(
	));

	$this->load->view('common/footer');	
	}

}