<?php 

class Model_login extends CI_Model{

	public function cek_login(){
		
		$this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));

        $result = $this->db->get("t_user");
		if($result->num_rows() > 0)
		{
			return $result->row();
		}else {
			return array();
		}
	}
	}
?>