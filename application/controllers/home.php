<?php 

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('home');
        $this->load->view('templates_home/footer');
    }
}

?>