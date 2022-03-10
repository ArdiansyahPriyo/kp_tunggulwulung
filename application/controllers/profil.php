<?php 

class Profil extends CI_Controller {


    public function index()
    {
        $data['user'] = $this->model_user->tampil_user()->result();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('profil', $data);
        $this->load->view('templates_home/footer');
    }

    
}

?>