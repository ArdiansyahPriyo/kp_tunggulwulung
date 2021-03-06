<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {


    public function index()
    {
        $data['info'] = $this->model_info->tampil_data();
        $data['recentinfo'] = $this->model_info->recent_info();
        $data2['user'] = $this->model_profil->tampil_user();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar', $data2);
        $this->load->view('informasi', $data);
        $this->load->view('templates_home/footer');
    }

    public function read_more()
    {
        $id_pengumuman      = $this->input->post('id_pengumuman');
        $where = array('id_pengumuman' => $id_pengumuman);
        $data['detailinfo'] = $this->model_info->detail_info($where, 't_pengumuman')->result();
        $data2['user'] = $this->model_profil->tampil_user();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar', $data2);
        $this->load->view('detail_info', $data);
        $this->load->view('templates_home/footer');
    }
}

?>