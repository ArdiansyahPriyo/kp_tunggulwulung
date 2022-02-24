<?php 

class Model_user extends CI_Model{

	public function tampil_user(){
		return $this->db->get('t_user');
	} 

	public function tambah_user($data,$table){
		$this->db->insert($table,$data);
	}
}

?>