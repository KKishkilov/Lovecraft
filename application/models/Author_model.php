<?php
class Author_model extends CI_Model {

    public $genres;
    public $information;
    public $styles;
    public $writings;
    private $table = 'lovecraft';

    public function __construct()
   {
       $this->load->database();
   }

    public function save(){

        $data = array(
            'genres' => $this->genres,
            'information' => $this->information,
            'styles' => $this->styles,
            'writings' => $this->writings,

        );

        return $this->db->insert($this->table, $data);
   }
}