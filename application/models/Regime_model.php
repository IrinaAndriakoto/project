<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Regime_model extends CI_Model{
    public funtion get_regime() {
        $query = $this->get('regime');
        return $query->result();
    }

    public function get_regime($id){
        $query = $this->get_where('regime',array('id'=>$id));
        return $query=>now();
    }

    public function create_regime($data){
        $this->db->insert('regime,$data');
        return this->db->insert_id();
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