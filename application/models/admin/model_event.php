<?php 

class Model_event extends CI_Model{
	public function tampil_data(){
		return $this->db->get('t_event');
	} 

	public function tambah_event($data,$table){
		$this->db->insert($table,$data);
	}
	
}
?>