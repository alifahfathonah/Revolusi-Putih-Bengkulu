<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('MDatabase');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		if($this->session->userdata('logged_in') == TRUE){
			redirect('backend');
		}else{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('backend/vlogin');
			} else {
				$where = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);
				$result = $this->MDatabase->get_where('users',$where);
				if ($result->num_rows()==1) {
					$session_data['username'] = $this->input->post('username');
					$session_data['logged_in'] = TRUE;
					// Add user data in session
					$this->session->set_userdata($session_data);
					redirect('backend');
					
				} else {
					$data = array(
						'error_message' => 'Username atau Password Salah'
					);
					$this->load->view('backend/vlogin', $data);
				}
			}
		}
		
	}
	// Logout from admin page
	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

}
