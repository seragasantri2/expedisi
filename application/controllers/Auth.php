<?php
	
	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		 public function index() 
		 {
	        if ($this->session->userdata('CS')) {
	            redirect(site_url('admin'), 'refresh');
	        }elseif ($this->session->userdata('Document')) {
	            redirect(site_url('Document'), 'refresh');
	        }elseif ($this->session->userdata('Admin')) {
	            redirect(site_url('Document'), 'refresh');
	        }else {
	            redirect(site_url('home/login'), 'refresh');
	        }
	    }

		public function login()
		{
			$this->form_validation->set_rules('username','Username','required',['required' => 'Username harap diisi']);
			$this->form_validation->set_rules('password','Password','required',['required' => 'Password harap diisi']);
			if ($this->form_validation->run() ==  FALSE)
			{
				$this->load->view('Auth/header');
				$this->load->view('Auth/login');
				$this->load->view('Auth/footer');
			}else{
				$auth = $this->users_models->cek_login();

				if($auth == FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Anda Salah!
						<button type="button" class="close" data-dismiss="alert" arial-label="Close">
						<span arial-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('Auth/login');
				}else {

					$this->session->set_userdata('user_id', $auth->id);
            $this->session->set_userdata('role_id', $auth->role_id);
            $this->session->set_userdata('name', $auth->nama_depan.' '.$auth->nama_belakang);
					$this->session->set_userdata('username',$auth->username);
					// $this->session->set_userdata('role_id',$auth->role_id);
					if ($auth->role_id == 1) {
						$this->session->set_userdata('CS','1');
						redirect(site_url('admin'), 'refresh');
					}else if ($auth->role_id == 2) {
						$this->session->set_userdata('Document','1');
						redirect(site_url('welcome'), 'refresh');
					}


				}
			}
			
		}

		public function register()
		{
			if($this->form_validation->run() ==  FALSE){
				$this->load->view('Auth/header');
				$this->load->view('Auth/register');
				$this->load->view('Auth/footer');
			}else {
				 echo "masuk logic else"; die();
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

		function logout(){
		$this->session->sess_destroy();
		redirect('Auth/login');
		}
	}
?>