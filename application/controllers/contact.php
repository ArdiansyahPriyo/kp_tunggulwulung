<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('contact');
        $this->load->view('templates_home/footer');
    }
}
?>
