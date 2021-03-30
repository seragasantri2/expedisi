<?php 

/**
 * 
 */
class jobsheet_model extends CI_Model
{
	
	public function get_data()
	{
		return $this->db->query('SELECT jobsheet.*, m_customer.id, m_customer.name_customer, m_pod.id, m_pod.name_pod, m_pol.id,m_pol.name_pol,m_volume.id,m_volume.name_vol FROM `jobsheet` INNER JOIN m_customer ON m_customer.customer_id=jobsheet.customer_no INNER JOIN m_pod ON m_pod.id=jobsheet.pod INNER JOIN m_pol ON m_pol.id=jobsheet.pol INNER JOIN m_volume ON m_volume.id=jobsheet.vol_weight')->result_array();
	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	 public function update_data($where,$table){
	 return $this->db->get_where($table,$where);
	 }

	 public function perbarui_data($where,$data,$table)
	 {
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
	 }

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
 ?>