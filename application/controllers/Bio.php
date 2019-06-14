<?php

class Bio extends CI_Controller{

	public function index(){
			 if(	!$this->isLoggedIn()){
		redirect('login');
	}
		$title = 'Bio';

	$this->load->view('common/header', array(
	       'title' => $title,
	));

	$this->load->view('common/navigation',array(
	));

	$this->load->view('bio/index', array(
	));

	$this->load->view('common/footer');	
	}

}