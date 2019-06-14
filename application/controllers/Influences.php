<?php

class Influences extends CI_Controller{

	public function index(){
			 if(	!$this->isLoggedIn()){
		redirect('login');
	}
		$title = 'Influences';

	$this->load->view('common/header', array(
	       'title' => $title,
	));

	$this->load->view('common/navigation',array(
	));

	$this->load->view('influences/index', array(
	));

	$this->load->view('common/footer');	
	}

}