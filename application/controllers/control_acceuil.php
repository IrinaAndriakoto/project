<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login'); 
        $this->load->model('Regime_mdoel'); 
        $data['regimes'] = $this->Regime_model->get_regimes();
        $this->load->view('acceuil_admin',$data);
    }  

    public function allUtilisateur($id){
        $data = array();
        $this->load->view('header',$data);
		$this->load->view('accueil',$data);
        $this->load->view('footer',$data);
    }
    public function allAdmin($id){
        $data = array();
        $this->load->view('header',$data);
		$this->load->view('acceuil_admin',$data);
        $this->load->view('footer',$data);
    }
}  
?>
  