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


	public function customer()
	{
		$this->load->model('Customers_model');
		$data['customer'] = $this->Customers_model->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/Customers',$data);
		$this->load->view('TemplateAdmin/footer');
	}

	public function tambah_customer()
	{
		$customer_id = $this->input->post('customer_id');
		$name = $this->input->post('name');

		$data = array(
			'customer_id' => $customer_id,
			'name'	=> $name,
		);
		$this->customers_model->input_data($data,'m_customer');
		redirect('Admin/customer');
	}

	 public function edit($id)
	 {
		 $where = array('id' => $id);
		 $data['customer'] = $this->customers_model->update_data($where,'m_customer')->result();
		 
		 $this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/CustomerEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function  update_customer(){
	 	$id 		 = $this->input->post('id');
	 	$customer_id = $this->input->post('customer_id');
	 	$name 		 = $this->input->post('name');

	 	$data = array(
	 		'id'		  => $id,
			'customer_id' => $customer_id,
			'name'		  => $name,
		);

		$where = array(
			'id' => $id
		);

		$tes = $this->customers_model->perbarui_data($where,$data,'m_customer');
		redirect('Admin/customer');
	 }


	public function hapus_customer($id){
	 $where = array('id' => $id);
	 $this->customers_model->hapus_data($where, 'm_customer');
	 redirect('Admin/customer');
	 }
}

?>