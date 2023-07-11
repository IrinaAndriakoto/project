<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Purchase extends CI_Controller {
    public function index(){
        $this->load->model('Offers_model');
        $data = $this->Offers_model->listeVola();
        $code = array('data'=>$data);
        $this->load->view('header',$code);
        $this->load->view('purchase',$code);
        $this->load->view('footer',$code);
        // $this->load->model('liste')
    }

    public function payer(){

    }
}

?>