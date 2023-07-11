<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class user extends CI_Model { 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    } 

    public function liste_user(){
        $query = $this->db->query('select * from user');
        $row = $query -> result_array();
        return $row;
    }

    public function verifUser($nom,$pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email',$nom);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        $row = $query -> result_array();
        return $row;
    }
}

?>