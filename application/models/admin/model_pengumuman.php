<?php 

class Model_pengumuman extends CI_Model{

	public function tampil_pengumuman(){
		return $this->db->get('t_pengumuman');
	} 
	public function tambah_pengumuman($data,$table){
		$this->db->insert($table,$data);
	}
	
}

?>