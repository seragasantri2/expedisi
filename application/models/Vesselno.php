<?php 

/**
 * 
 */
class Vesselno extends CI_Model
{
	
	public function get_data()
	{
		return $this->db->query('select m_vessel_no.id, m_vessel_no.vessel_id, m_vessel_no.name
		 from m_vessel_no INNER JOIN m_vessel ON m_vessel.id = m_vessel_no.vessel_id')->result_array();
	}

		public function get_id()
	{
		return $this->db->get('m_vessel')->result_array();
	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	 public function update_data($where,$table)
	 {
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