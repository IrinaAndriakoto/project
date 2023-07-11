<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    } 
    public function listeVola() {
        $query = $this->db->get('code');
        return $query->result_array();
    }
    public function demande($id_user, $code) {
        $data = array(
            'id_user' => $id_user,
            'value' => $code,
        );
    
        $this->db->insert('demande', $data);
    }
}
