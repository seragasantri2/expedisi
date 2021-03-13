<?php 

/**
 * 
 */
class Volume extends CI_Model
{
	
	public function get_data()
	{
		return $this->db->get('m_volume')->result_array();
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