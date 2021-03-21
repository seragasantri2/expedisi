<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends CI_Controller
{
	public function index() {
	    if ($this->session->userdata('CS') == true) {
	      $this->dashboard();
	    }else {
	      redirect(site_url('auth/login'), 'refresh');
	    }
	  }

	public function dashboard()
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

		$this->customers_model->perbarui_data($where,$data,'m_customer');
		redirect('Admin/customer');
	 }


	public function hapus_customer($id){
	 $where = array('id' => $id);
	 $this->customers_model->hapus_data($where, 'm_customer');
	 redirect('Admin/customer');
	 }


	 public function carrier()
	 {
	 	$this->load->model('carrier');
		$data['carrier'] = $this->carrier->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/Carrier',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_carrier()
	 {
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'name' => $name,
	 	);
	 	$this->load->model('carrier');
	 	$this->carrier->input_data($data,'m_carrier');
	 	redirect('Admin/carrier');
	 }

	 public function delete_carrier($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('carrier');
	 	$this->carrier->hapus_data($where, 'm_carrier');
	 	redirect('Admin/carrier');
	 }

	 public function edit_carrier($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('carrier');
	 	$data['carrier'] = $this->carrier->update_data($where,'m_carrier')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/CarrierEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function CarrierUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('carrier');
	 	$this->carrier->perbarui_data($where, $data, 'm_carrier');
	 	redirect('Admin/carrier');
	 }

	 	 public function pol()
	 {
	 	$this->load->model('pol');
		$data['pol'] = $this->pol->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/Pol',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_pol()
	 {
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'name' => $name,
	 	);
	 	$this->load->model('pol');
	 	$this->pol->input_data($data,'m_pol');
	 	redirect('Admin/pol');
	 }

	 public function delete_pol($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('pol');
	 	$this->pol->hapus_data($where, 'm_pol');
	 	redirect('Admin/pol');
	 }

	 public function edit_pol($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('pol');
	 	$data['pol'] = $this->pol->update_data($where,'m_pol')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/PolEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function PolUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('pol');
	 	$this->pol->perbarui_data($where, $data, 'm_pol');
	 	redirect('Admin/pol');
	 }

 	 public function pod()
	 {
	 	$this->load->model('pod');
		$data['pod'] = $this->pod->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/pod',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_pod()
	 {
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'name' => $name,
	 	);
	 	$this->load->model('pod');
	 	$this->pod->input_data($data,'m_pod');
	 	redirect('Admin/pod');
	 }

	 public function delete_pod($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('pod');
	 	$this->pod->hapus_data($where, 'm_pod');
	 	redirect('Admin/pod');
	 }

	 public function edit_pod($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('pod');
	 	$data['pod'] = $this->pod->update_data($where,'m_pod')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/PodEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function PodUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('pod');
	 	$this->pod->perbarui_data($where, $data, 'm_pod');
	 	redirect('Admin/pod');
	 }

	 public function volume()
	 {
	 	$this->load->model('volume');
	 	$data['volume'] = $this->volume->get_data();
	 	$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/volume',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_volume()
	 {
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'name' => $name
	 	);

	 	$this->load->model('volume');
	 	$this->volume->input_data($data, 'm_volume');
	 	redirect('Admin/volume');
	 }

	 public function edit_volume($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('volume');
	 	$data['volume'] = $this->volume->update_data($where,'m_volume')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/VolumeEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function VolumeUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	);

	 	$this->load->model('volume');
	 	$this->volume->perbarui_data($where,$data,'m_volume');
	 	redirect('Admin/volume');
	 }

	 
		public function delete_volume($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('volume');
	 	$this->volume->hapus_data($where, 'm_volume');
	 	redirect('Admin/volume');
	 }

	 public function vessel()
	 {
	 	$this->load->model('vessel');
		$data['vessel'] = $this->vessel->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/Vessel',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_vessel()
	 {
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'name' => $name,
	 	);
	 	$this->load->model('vessel');
	 	$this->vessel->input_data($data,'m_vessel');
	 	redirect('Admin/vessel');
	 }

	 public function delete_vessel($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('vessel');
	 	$this->vessel->hapus_data($where, 'm_vessel');
	 	redirect('Admin/vessel');
	 }

	 public function edit_vessel($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('vessel');
	 	$data['vessel'] = $this->vessel->update_data($where,'m_vessel')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/vesselEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function vesselUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('vessel');
	 	$this->vessel->perbarui_data($where, $data, 'm_vessel');
	 	redirect('Admin/vessel');
	 }

	 public function VesselNo()
	 {
	 	$this->load->model('vesselno');
	 	$data['vesselno'] = $this->vesselno->get_data();
	 	$data['vessel'] = $this->vesselno->get_id();
	 	$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/VesselNo',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function tambah_vesselno()
	 {
	 	$vessel_id = $this->input->post('vessel_id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'vessel_id' => $vessel_id,
	 		'name' => $name
	 	);

	 	$this->load->model('vesselno');
	 	$this->vesselno->input_data($data, 'm_vessel_no');
	 	redirect('Admin/VesselNo');
	 }

	 public function edit_vesselno($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('vesselno');
	 	$data['vesselno'] = $this->vesselno->update_data($where,'m_vessel_no')->result();
	 	$data['vessel'] = $this->vesselno->get_id();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Admin/VesselNoEdit',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	 public function VesselNoUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$vessel_id = $this->input->post('vessel_id');
	 	$name = $this->input->post('name');

	 	$data = array(
	 		'id' => $id,
	 		'vessel_id' => $vessel_id,
	 		'name' => $name
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('vesselno');
	 	$this->vesselno->perbarui_data($where, $data, 'm_vessel_no');
	 	redirect('Admin/VesselNo');
	 }

	 
		public function delete_vessel_no($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('vesselno');
	 	$this->vesselno->hapus_data($where, 'm_vessel_no');
	 	redirect('Admin/VesselNo');
	 }


}

?>