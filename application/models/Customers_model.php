<?php 

/**
 * 
 */
class Customers_model extends CI_Model
{
	
	public function get_data()
	{
		return $this->db->get('m_customer')->result_array();
	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	 function update_data(){
	 return $this->db->get('m_customer')->result_array();
	 }

	function hapus_data($where,$table){
	 $this->db->where($where);
	 $this->db->delete($table);
	}
}
 ?>