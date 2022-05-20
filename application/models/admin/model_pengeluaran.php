<?php 

class Model_pengeluaran extends CI_Model{
	
	public function tampil_pengeluaran(){
		$this->db->select('*');
		$this->db->from('t_pengeluaran');
		$query = $this->db->get();
      return $query->result();
	}

	public function tambah_pengeluaran($data,$table){
		$this->db->insert($table,$data);
	}

	public function total_pengeluaran(){
		$this->db->select('SUM(harga_pengeluaran) as total_pengeluaran');
		$this->db->from('t_pengeluaran');
		//$this->db->where('transaction_status', 'settlement');
		$query = $this->db->get();
	    return $query->result();
	}
}
?>