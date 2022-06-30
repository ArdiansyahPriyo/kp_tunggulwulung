<?php 

class Model_info extends CI_Model{
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('t_pengumuman');
		$this->db->where('status', 'tampilkan');
		$query = $this->db->get();
        return $query->result();
	} 

	public function recent_info(){
		$nows  = strtotime(date('Y-m-d'));
		$start = date('Y-m-d',strtotime('-7 day',$nows));
		$end   = date('Y-m-d');
		$this->db->select('*');
		$this->db->from('t_pengumuman');
		$this->db->where("created_date between '$start' AND '$end'");
		$this->db->order_by("id_pengumuman", "desc");
		$query = $this->db->get();
        return $query->result();
	} 

	public function detail_info($where,$table){
		return $this->db->get_where($table,$where);
	}

}
?>