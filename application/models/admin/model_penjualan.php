<?php 

class Model_penjualan extends CI_Model{
	
	public function total_penjualan(){
		$this->db->select('SUM(gross_amount) as total_penjualan');
		$this->db->from('t_pesanan');
		$this->db->where('transaction_status', 'settlement');
		$query = $this->db->get();
	    return $query->result();
	}

	function get_data($bulan) {
    $this->db->select('SUM(gross_amount) as total_penjualan, transaction_time');
    $this->db->from('t_pesanan');
   	$this->db->where('transaction_status', 'settlement');
    $this->db->where("DATE_FORMAT(transaction_time,'%Y-%m')", $bulan);
    //$this->db->group_by('pel.id_barcode');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->result();
        } else {
        return false;
    }
} 

}
?>