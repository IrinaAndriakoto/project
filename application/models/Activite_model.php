<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Activite_model extends CI_Model {
    public function create_activite($data) {
        $this->db->insert('activites', $data);
        return $this->db->insert_id();
    }

    public function get_activites() {
        $query = $this->db->get('activites');
        return $query->result();
    }

    public function get_activite_by_id($id) {
        $query = $this->db->get_where('activites', array('id' => $id));
        return $query->row();
    }

    public function update_activite($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('activites', $data);
    }

    public function delete_activite($id) {
        $this->db->where('id', $id);
        $this->db->delete('activites');
    }
}
?>