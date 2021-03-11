<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('users_models');
		$data['user'] = $this->users_models->get_user();

		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('dashboard',$data);
		$this->load->view('TemplateAdmin/footer');
	}

	public function users()
	{
		$this->load->model('users_models');
		$data['user'] = $this->users_models->get_user();
		// print_r($user);
		$this->load->model('users_models');
		$data['role'] = $this->users_models->get_role();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/users',$data);
		$this->load->view('TemplateAdmin/footer');
	}

	public function TambahData()
	{
		$this->load->model('users_models');
		$data['user'] = $this->users_models->TambahData();
		$this->load->model('users_models');
		$data['role'] = $this->users_models->get_role();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/TambahData',$data);
		$this->load->view('TemplateAdmin/footer');
	}
}

?>