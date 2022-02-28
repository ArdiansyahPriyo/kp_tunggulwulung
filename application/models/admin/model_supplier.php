<?php 

class Model_supplier extends CI_Model{

	public function tampil_supplier(){
		return $this->db->get('t_supplier');
	} 

	public function tambah_supplier($data,$table){
		$this->db->insert($table,$data);
	}
}

?>