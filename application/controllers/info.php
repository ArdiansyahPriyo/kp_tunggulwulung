<?php 

class Info extends CI_Controller {


    public function index()
    {
        $data['info'] = $this->model_info->tampil_data();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('informasi', $data);
        $this->load->view('templates_home/footer');
    }

    
}

?>