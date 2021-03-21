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

	 public function get_all_user($user_id = 0, $param = "", $partner = "") {
        if ($user_id > 0) {
            $this->db->where('id', $user_id);
        }
        //echo $param;
        if($param == 'users'){
            $this->db->where('role_id != ', 2)->where('role_id != ', 3)->where('role_id != ', 6);
        } else if($param == 'students'){
            $this->db->where('role_id', 3);
        } else if($param == 'Partner'){
            $this->db->where('role_id', 3)->where('partner_id', $partner);
            $this->db->or_where('role_id', 4)->where('partner_id', $partner);
            $this->db->or_where('role_id', 5)->where('partner_id', $partner);
            $this->db->or_where('role_id', 6)->where('partner_id', $partner);
        } else if($param == 'admin'){
            $this->db->where('role_id', 1);
            $this->db->or_where('role_id', 6);            
        }
        return $this->db->get('users');
    }


	
}
?>