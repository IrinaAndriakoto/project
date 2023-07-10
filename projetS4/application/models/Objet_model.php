<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model{
//maka objet ana user
    public function getMyObject($id){
        $objets=array();
        $sql="select objet.id_objet,objet.id_user,categorie.id_categorie,categorie.nom_categorie,photo.nom_photo,objet.description_text,objet.prix
        from photo
        join objet
        on photo.id_objet=objet.id_objet
        join categorie
        on objet.id_categorie=categorie.id_categorie
        where id_user=$id
        group by categorie.id_categorie";
        // var_dump($sql);
        $sql = sprintf($sql, $this->db->escape($id));
        $query = $this->db->query($sql);
        $objets =  $query->result_array();
        return $objets;
    }
}