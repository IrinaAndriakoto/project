<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    } 
    public function listeVola() {
        $query = $this->db->get('code');
// var_dump($query->result_array());
        return $query->result_array();
    }
    public function demande($id_user, $isValid, $code) {
        $data = array(
            'id_user' => $id_user,
'isValid' => $isValid,
            'id_code' => $code,
        );
    
        $this->db->insert('demande', $data);
    }

    public function selectDemande(){
        $this->db->select('*');
        $this->db->from('regime');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
