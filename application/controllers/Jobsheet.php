<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Jobsheet extends CI_Controller
{
	
	public function Create()
	{
		$this->load->model('users_models');
		$data['user'] = $this->users_models->TambahData();
		$this->load->model('users_models');
		$this->load->model('Customers_model');
		$data['customer'] = $this->Customers_model->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Jobsheet/create',$data);
		$this->load->view('TemplateAdmin/footer');
	}
}

?>