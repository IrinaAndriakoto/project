<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function allUtilisateur($id){
        $data = array();
        $this->load->view('header',$data);
		$this->load->view('accueil',$data);
        $this->load->view('footer',$data);
    }
    public function allAdmin($id){
        $data = array();
		$this->load->view('acceuil_admin',$data);
    }
}  
?>
  