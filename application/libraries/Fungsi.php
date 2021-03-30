<?php 

class Fungsi {
	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}

	function user_login() {
		$this->ci->load->model('users_models');
		$user_id = $this->ci->session->userdata('id');
		$user_data = $this->ci->users_models->get($user_id)->row();
		return $user_data;
	}
}

 ?>