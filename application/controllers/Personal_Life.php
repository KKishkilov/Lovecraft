<?php

class Personal_Life extends CI_Controller{

	public function index(){
			 if(	!$this->isLoggedIn()){
		redirect('login');
	}
		$title = 'Personal Life';

	$this->load->view('common/header', array(
	       'title' => $title,
	));

	$this->load->view('common/navigation',array(
	));

	$this->load->view('Personal_Life/index', array(
	));

	$this->load->view('common/footer');	
	}

}