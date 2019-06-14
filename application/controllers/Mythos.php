<?php

class Mythos extends CI_Controller{

	public function index(){
			 if(	!$this->isLoggedIn()){
		redirect('login');
	}
		$title = 'Mythos';

	$this->load->view('common/header', array(
	       'title' => $title,
	));

	$this->load->view('common/navigation',array(
	));

	$this->load->view('Mythos/index', array(
	));

	$this->load->view('common/footer');	
	}

}