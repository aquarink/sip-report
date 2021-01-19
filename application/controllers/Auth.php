<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('AdminModel');
		$this->load->model('ClientsModel');
    }

	public function index() {
		if($this->session->userdata('uname') != '' && $this->session->userdata('role') != '') {
			redirect(base_url('dashboard'));
		} else {
			$this->load->view('auth/login');
		}
	}

	public function SubmitLogin() {
		$msg 			= '';
		$usernameTxt 	= $this->input->post('usernameTxt');
		$passwordTxt 	= $this->input->post('passwordTxt');

		if($usernameTxt != '' && $passwordTxt != '') {
			$checkAdmin = $this->AdminModel->CheckAdmin($usernameTxt, sha1($passwordTxt));
			if(count($checkAdmin) > 0) {
				foreach ($checkAdmin as $key => $val) {
					$sess_array = array(
						'uname' 	=> $val->username,
						'role'		=> 'admin', 
						'context'	=> 'all', 
					);

					$this->session->set_userdata($sess_array);
				}

				redirect(base_url('dashboard'));
			} else {
				// CHECK KE USER
				$checkClient = $this->ClientsModel->CheckClient($usernameTxt, sha1($passwordTxt));
				if(count($checkClient) > 0) {
					foreach ($checkClient as $key => $val) {
						$sess_array = array(
							'uname' 	=> $val->uname,
							'role'		=> 'client', 
							'context'	=> $val->context, 
						);

						$this->session->set_userdata($sess_array);
					}

					redirect(base_url('dashboard'));
				} else {
					$msg = 'Account not found';
					redirect(base_url('?msg='.$msg));
				}
			}
		} else {
			$msg = 'Empty form';
			redirect(base_url('?msg='.$msg));
		}
	}

	public function SesionLogout() {
		$this->session->sess_destroy();

		redirect(base_url());
	}
}
