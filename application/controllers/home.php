<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $data['user'] = $this->model_profil->tampil_user();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar', $data);
        $this->load->view('home');
        $this->load->view('templates_home/footer');
    }

}

?>