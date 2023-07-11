<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class control_acceuil extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('Login'); 

        $this->load->model('Regime_model'); 
        $data['regimes'] = $this->Regime_model->get_regimes();
        
        $this->load->model('Activite_model');
        $data['activites'] = $this->Activite_model->get_activites();

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

    public function create_activite() {
        $data = array(
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description')
        );

        $this->load->model('Activite_model');
        $this->Activite_model->create_activite($data);

        redirect('acceuil_admin');
    }

    public function edit_activite($id) {
        $this->load->model('Activite_model');
        $data['activite'] = $this->Activite_model->get_activite_by_id($id);

        // Afficher le formulaire d'édition de l'activité sportive avec les données pré-remplies
        $this->load->view('edit_activite', $data);
    }

    public function update_activite($id) {
        $data = array(
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description')
        );

        $this->load->model('Activite_model');
        $this->Activite_model->update_activite($id, $data);

        redirect('acceuil_admin');
    }

    public function delete_activite($id) {
        $this->load->model('Activite_model');
        $this->Activite_model->delete_activite($id);

        redirect('acceuil_admin');
    }
}

?>
  