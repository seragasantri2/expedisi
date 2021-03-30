<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Jobsheet extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('CS') == true) {
	    	$this->load->model('Jobsheet_model');
			$data['jobsheet'] = $this->Jobsheet_model->get_data();
			$this->load->view('TemplateAdmin/header');
			$this->load->view('TemplateAdmin/sidebarAdmin');
			$this->load->view('Jobsheet/Jobsheet',$data);
			$this->load->view('TemplateAdmin/footer');
	    }else {
	      redirect(site_url('auth/login'), 'refresh');
	    }
		
	}
	
	public function Create()
	{
		$this->load->model('users_models');
		$data['user'] = $this->users_models->TambahData();
		$this->load->model('pol');
		$data['pol'] = $this->pol->get_data();
		$this->load->model('pod');
		$data['pod'] = $this->pod->get_data();
		$this->load->model('Customers_model');
		$data['customer'] = $this->Customers_model->get_data();		
		$this->load->model('Carrier');
		$data['carrier'] = $this->Carrier->get_data();
		$this->load->model('Volume');
		$data['vol'] = $this->Volume->get_data();
		$this->load->model('Vessel');
		$data['vessel'] = $this->Vessel->get_data();
		$this->load->model('Vesselno');
		$data['vesselno'] = $this->Vesselno->get_data();
		$this->load->model('term');
		$data['term'] = $this->term->get_data();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Jobsheet/create',$data);
		$this->load->view('TemplateAdmin/footer');
	}

	public function tambah_jobsheet()
	 {
	 	$customer_no = $this->input->post('customer_no');
	 	$carrier_id = $this->input->post('carrier_id');
	 	$pol = $this->input->post('pol');
	 	$pod = $this->input->post('pod');
	 	$vol_weight = $this->input->post('vol_weight');
	 	$vessel = $this->input->post('vessel');
	 	$vessel_no = $this->input->post('vessel_no');
	 	$eta_city = $this->input->post('eta_city');
	 	$term = $this->input->post('term');
	

	 	$data = array(
	 		'customer_no' => $customer_no,
	 		'carrier_id' => $carrier_id,
	 		'pol' => $pol,
	 		'pod' => $pod,
	 		'vol_weight' => $vol_weight,
	 		'vessel' => $vessel,
	 		'vessel_no' => $vessel_no,
	 		'eta_city' => $eta_city,
	 		'term' => $term,
	 		
	 	);
	 	$this->load->model('Jobsheet_model');
	 	$this->Jobsheet_model->input_data($data,'jobsheet');
	 	redirect('Jobsheet/index');
	 }

	 public function delete_jobsheet($id)
	 {
	 	$where = array( 'id' => $id);
	 	$this->load->model('Jobsheet_model');
	 	$this->Jobsheet_model->hapus_data($where, 'jobsheet');
	 	redirect('Jobsheet/index');
	 }

	 public function edit_jobsheet($id)
	 {
	 	$where = array('id' => $id);
	 	$this->load->model('users_models');
		$data['user'] = $this->users_models->TambahData();
		$this->load->model('pol');
		$data['pol'] = $this->pol->get_data();
		$this->load->model('pod');
		$data['pod'] = $this->pod->get_data();
		$this->load->model('Customers_model');
		$data['customer'] = $this->Customers_model->get_data();		
		$this->load->model('Carrier');
		$data['carrier'] = $this->Carrier->get_data();
		$this->load->model('Volume');
		$data['vol'] = $this->Volume->get_data();
		$this->load->model('Vessel');
		$data['vessel'] = $this->Vessel->get_data();
		$this->load->model('Vesselno');
		$data['vesselno'] = $this->Vesselno->get_data();
		$this->load->model('term');
		$data['term'] = $this->term->get_data();
	 	$this->load->model('Jobsheet_model');
	 	$data['jobsheet'] = $this->Jobsheet_model->update_data($where,'jobsheet')->result();
		$this->load->view('TemplateAdmin/header');
		$this->load->view('TemplateAdmin/sidebarAdmin');
		$this->load->view('Jobsheet/JobsheetUpdate',$data);
		$this->load->view('TemplateAdmin/footer');
	 }

	public function JobsheetUpdate()
	 {
	 	$id = $this->input->post('id');
	 	$customer_no = $this->input->post('customer_no');
	 	$carrier_id = $this->input->post('carrier_id');
	 	$pol = $this->input->post('pol');
	 	$pod = $this->input->post('pod');
	 	$vol_weight = $this->input->post('vol_weight');
	 	$vessel = $this->input->post('vessel');
	 	$vessel_no = $this->input->post('vessel_no');
	 	$eta_city = $this->input->post('eta_city');
	 	$term = $this->input->post('term');
	

	 	$data = array(
	 		'id'	=> $id,
	 		'customer_no' => $customer_no,
	 		'carrier_id' => $carrier_id,
	 		'pol' => $pol,
	 		'pod' => $pod,
	 		'vol_weight' => $vol_weight,
	 		'vessel' => $vessel,
	 		'vessel_no' => $vessel_no,
	 		'eta_city' => $eta_city,
	 		'term' => $term,
	 		
	 	);

	 	$where = array(
	 		'id' => $id
	 	); 
	 	$this->load->model('Jobsheet_model');
	 	$this->Jobsheet_model->perbarui_data($where, $data, 'jobsheet');
	 	redirect('Jobsheet/index');
	 }

}

?> 