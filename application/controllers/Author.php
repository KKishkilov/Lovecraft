<?php

class Author extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    
         
        $this->load->view('common/header');
        $this->load->view('common/navigation');
        $this->load->view('site/index');
        $this->load->view('common/footer');
    }

          
  
        public function update($id){
              echo $id;
        }
}


// $breadcrumb_items = array ('Main Menu','skip to content','podcast','lovecraft ezine books','free lovecraftian fiction','lovecraftian movies','recommended lovecraftian books','lovecraftian audios','contact','submissions','community','amazon portal','ezine store','about the editor','lovecraftian t-shirts!','patreon','advertise','about','magazine');