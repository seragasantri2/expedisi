<?php	
/**
 * 
 */
class Sidebar extends CI_Model
{
	
	public function get_sidebar()
	{
		return $this->db->get('tb_sidebar')->result_array();
	}

	
}
?>