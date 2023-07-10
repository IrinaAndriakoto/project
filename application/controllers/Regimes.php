<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Regimes extends CI_Controller {
    public function index(){
        $this->load->model('regime_model');
        $data['regimes']=$this->regime_model->get_regimes();
        $this->load->view('acceuil_admin',$data);
        $var_dump($regimes);
    }

    public function create(){
        $this->load->model('regime_model');

        //verification des donnees envoyees

        $data = array(
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description')
        );

        $regime_id=$this->regime_model->create_regime($data);

        redirect('regimes');
    }
    public function edit($id){
        $this->load->model('regime_model');
        $data['regime'] = $this->regime_mdoel->get_regime($id);
        $this->load->view('regimes/edit',$data);
    }

    public function update($id){
        $this->load->model('regime_model');

        $data = array(
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description')
        );

         $this->regime_model->update_regime($id, $data);

        // Rediriger vers la liste des régimes après la mise à jour
        redirect('regimes');
    }
    
    public function delete($id){
        $this->load->model('regime_model');
        $this->regime_model->delete_regime($id);

        redirect('regimes');
    }
}
?>