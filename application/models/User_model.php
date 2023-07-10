<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    } 
  
    public function inscription($user_name,$user_email ,$user_pwd){
        $sql = "INSERT INTO user (nom,email,password,estAdmin) VALUES (%s,%s,%s,false)";
        $sql = sprintf($sql,
        $this->db->escape($user_name), 
        $this->db->escape($user_email),
        $this->db->escape($user_pwd));
        $this->db->query($sql);
    }
    
    public function completion($id_user, $genre, $poids, $taille,$id_choice) {
        $data = array(
            'id_user' => $id_user,
            'genre' => $genre,
            'poids' => $poids,
            'taile' => $taille,
            'id_choice'=>$id_choice
        );
    
        $this->db->insert('aboutUser', $data);
    }
}