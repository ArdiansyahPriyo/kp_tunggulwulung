<?php 

class Model_sistem_mancing extends CI_Model{
	public function tampil_data(){
		return $this->db->get('t_sistem');
	} 

	public function tambah_sistem($data,$table){
		$this->db->insert($table,$data);
	}
	
}
?>