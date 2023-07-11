<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
    
    public function index()  
    {  
        $this->load->view('Login');  
    }  

    public function signin()  
    {  
        $this->load->view('SignIn');  
    }  
    
    public function acceuil()  
    {  
        $this->load->view('acceuil');  
    }  
    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        $this->load->model('user');     
        $data = $this->user->verifUser($user, $pass);
    
        if (count($data) == 1)   
        {  
            $this->load->library('session');
            $this->session->set_userdata('user', $data);
    
            if ($data[0]['estAdmin'] == true) {
                redirect('control_acceuil/allAdmin/'.$data[0]['id_user']);
            } else {
                redirect('control_acceuil/allUtilisateur/'.$data[0]['id_user']);
            }
        }
        else {  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('Login', $data);  
        }  
    }
    
    
    public function insert_user(){
        $data=array();
        $user = $this->input->post('name');  
        $mail = $this->input->post('email');   
        $pass = $this->input->post('password');
        $this->load->model('User_model');     
        $this->User_model->inscription($user,$mail,$pass);
        $this->load->model('user'); 
        $data=$this->user->verifUser($mail,$pass);
        $this->load->library('session');
        $this->session->set_userdata('user',$data);  
        // var_dump($data);
        redirect('control_acceuil/allUtilisateur/'.$data[0]['id_user']);
    }       

    public function logout()  
    {  
        //removing session  
        $this->load->library('session');
        $this->session->unset_userdata('user');  
        redirect("Login");  
    } 
    public function completion_user()
    {
        $this->load->view('accueil');  
        $data=array();
        //var_dump($id);  
        
        $user =$this->session->userdata('user');
        $id=$user[0]['id_user'];
        $genre = $this->input->post('genre');   
        // echo $genre;
        $poids = $this->input->post('poids');
        $taile = $this->input->post('taile');
        $choice = $this->input->post('choice');
        // echo $choice;
        $this->load->model('User_model');     
        $this->User_model->completion($id,$genre,$poids,$taile,$choice);
    }  
  
}  
?>