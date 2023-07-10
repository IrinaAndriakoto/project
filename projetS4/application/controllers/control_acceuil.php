<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function allUtilisateur($id){
        $data = array();
        // $this->load->model('Objet_model');   
        // $data['liste']=$this->Objet_model->getMyObject($id);
		// $data['contents']='mesObjets';
		$this->load->view('acceuil_echange',$data);
    }
    public function allAdmin($id){
        $data = array();
        // $this->load->model('Objet_model');   
        // $data['liste']=$this->Objet_model->getMyObject($id);
		// $data['contents']='mesObjets';
		$this->load->view('acceuil_admin',$data);
    }
}  
?>
  