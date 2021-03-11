<?php

/**
 * 
 */
class Register extends CI_Controller
{
	
	public function index()
		{
			$this->form_validation->set_rules('name_depan','Username','required',['required' => 'Nama Depan harap diisi']);
			$this->form_validation->set_rules('nama_belakang','Username','required',['required' => 'Nama Belakang harap diisi']);
			$this->form_validation->set_rules('umur','Username','required',['required' => 'Umur harap diisi']);
			$this->form_validation->set_rules('username','Username','required',['required' => 'Username harap diisi']);
			$this->form_validation->set_rules('password_1','Username','required|matches[password_2]',[
				'required' => 'Password Wajib diisi!!',
				'matches' => 'Password Tidak Sama!',
			]);
			$this->form_validation->set_rules('password_2','Username','required|matches[password_1]');
			if($this->form_validation->run() ==  FALSE){
				$this->load->view('Auth/header');
				$this->load->view('Auth/register');
				$this->load->view('Auth/footer');
			}else {
				$data = array(
					'id'			=> '',
					'nama_depan' 	=> $this->input->post('nama_depan'),
					'nama_belakang'	=> $this->input->post('nama_belakang'),
					'umur'	=> $this->input->post('umur'),
					'username'		=> $this->input->post('username'),
					'password' 	=> $this->input->post('password_1'),
					'role_id'	=> 2,
				);
				$this->db->insert('tb_users',$data);
				redirect('Auth/login');
			}
		}
}