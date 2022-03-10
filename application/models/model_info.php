<?php 

class Model_info extends CI_Model{
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('t_pengumuman');
		$this->db->where('status', 'tampilkan');
		$query = $this->db->get();
        return $query->result();
	} 

}
?>