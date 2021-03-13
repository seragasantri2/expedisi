<?php	
/**
 * 
 */
class Users_models extends CI_Model
{
	
	public function get_user()
	{
		return $this->db->query('select * from tb_users INNER JOIN tb_role ON tb_users.role_id = tb_role.role_id')->result_array();
	}

	public function TambahData()
	{
		return $this->db->query('select * from tb_users INNER JOIN tb_role ON tb_users.role_id = tb_role.role_id WHERE tb_users.role_id = "" ')->result_array();
	}


	public function get_role()
	{
		return $this->db->get('tb_role')->result_array();
	}

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result 	= $this->db->where('username',  $username)->where('password',$password)->limit(1)->get('tb_users');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}
?>