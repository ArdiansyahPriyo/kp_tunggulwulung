<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


    public function index()
    {
       
        $this->form_validation->set_rules('password1','Password',
            'required|matches[password2]',
            ['required' => 'Password wajib diisi!',
             'matches' => 'Password tidak cocok!']);
        $this->form_validation->set_rules('password2','Password','required|matches[password1]');

        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $password = $this->input->post('password1');
        $sql = $this->db->query("SELECT email,password FROM t_user where email='$email' or password='$password'");
        $cek_email = $sql->num_rows();
        if ($cek_email > 0) {
        $this->session->set_flashdata('sudah_ada','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Email atau Password sudah digunakan!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'  
        );
        redirect(site_url('register'));
                }else{
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_admin/header');
            $this->load->view('register');
            $this->load->view('templates_admin/footer');
        } else {    
            $data = array (
                'id_user'   => '',
                'nama'      => $this->input->post('nama'),
                'no_hp'     => $this->input->post('no_hp'),
                'email'     => $this->input->post('email'),
                'alamat'    => $this->input->post('alamat'),
                'password'  => md5($this->input->post('password1')),
                'hak_akses' => 'pemancing',
                'status'    => 'aktif'
            );

            $this->db->insert('t_user',$data);
            $this->session->set_flashdata('berhasil_daftar','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
                <script type ="text/JavaScript">  
                swal("Registrasi berhasil !","Silahkan login ","success")  
                </script>'  
            );
            redirect('login');
        }
        }
    }
}

?>