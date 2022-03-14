<?php 

class Model_profil extends CI_Model{

	public function tampil_user(){
		$this->db->select('*');
      	$this->db->from('t_user');
      	$this->db->where('id_user', $this->session->userdata('id_user'));
        $query = $this->db->get();
        return $query->result();
	}

}

?>
