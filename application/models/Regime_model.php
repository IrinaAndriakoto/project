<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Regime_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_regimes() {
        $this->db->select('*');
        $this->db->from('regime');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_regime($id){
        $query = $this->db->get_where('regime',array('id'=>$id)); 
        return $query->row();
    }

    public function create_regime($data){
        $this->db->insert('regime',$data);
        return $this->db->insert_id();
    }

    public function update_regime($id,$data){
        $this->db->where('id',$id);
        $this->db->update('regime',$data);
    }

    public function delete_regime($id){
        $this->db->where('id',$data);
        $this->db->delete('regime');
    }
}
?>