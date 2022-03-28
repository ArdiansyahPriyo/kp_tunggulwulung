<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


    public function index()
    {
        $data['user'] = $this->model_profil->tampil_user();
        $this->load->view('templates_home/header');
        $this->load->view('templates_home/sidebar');
        $this->load->view('profil', $data);
        $this->load->view('templates_home/footer');
    }
    
    public function nonaktifkan_akun()
    {
        $id_user       = $this->input->post('id_user');
        

        $data = array(
                'id_user'      => $id_user,
                'status'           =>'nonaktif'     
        );

            $this->db->where('id_user', $id_user);
            $this->db->update('t_user', $data);
            // $this->session->set_flashdata('berhasilEditEvent','<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
            //         Data berhasil diubah!
            //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //     <span aria-hidden="true">&times;</span>
            //   </button>
            // </div>');
            $this->session->sess_destroy();
            redirect('');
    }

    public function edit_profil()
    {
        $id_user        = $this->input->post('id_user');
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $no_hp          = $this->input->post('no_hp');
        $alamat         = $this->input->post('alamat');
        $email2         = $this->input->post('email2');
        $sql = $this->db->query("SELECT email,password FROM t_user where email='$email' or password='$password'");
        $cek_email = $sql->num_rows();

        if ($email == $email2) {
            $data = array(
            'id_user'        => $id_user,
            'nama'           => $nama,
            'no_hp'          => $no_hp,  
            'alamat'         => $alamat
        );

            $this->db->where('id_user', $id_user);
            $this->db->update('t_user', $data);
            $this->session->set_flashdata('berhasilEditProfil','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
                <script type ="text/JavaScript">  
                swal("Sukses !","Profil Berhasil Diubah","success")  
                </script>'  
            );
            redirect('profil');
        }elseif ($cek_email > 0) {
        $this->session->set_flashdata('SudahAda','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
                <script type ="text/JavaScript">  
                swal("Gagal !","Email sudah ada","error")  
                </script>'
        );
        redirect(site_url('profil'));
        }else{

        $data = array(
            'id_user'        => $id_user,
            'nama'           => $nama,
            'email'          => $email,
            'no_hp'          => $no_hp,  
            'alamat'         => $alamat
        );

            $this->db->where('id_user', $id_user);
            $this->db->update('t_user', $data);
            $this->session->set_flashdata('berhasilEditProfil','<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
                <script type ="text/JavaScript">  
                swal("Sukses !","Profil Berhasil Diubah","success")  
                </script>'  
            );
            redirect('profil');
        }
    }
    
}

?>