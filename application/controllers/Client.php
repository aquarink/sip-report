<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('AdminModel');
		$this->load->model('ClientsModel');
    }

	public function index() {
		// $this->session->userdata('uname')
		// $this->session->userdata('role');

		if($this->session->userdata('uname') == '') {
			redirect(base_url());
		}

		$client_list = $this->ClientsModel->ClientAll();

		$data = array(
			'view_file' 	=> 'client/list_client',
			'client_list' 	=> $client_list,
		);

		$this->load->view('template/main', $data);
	}

	public function AddNewClient() {

		if($this->session->userdata('uname') == '') {
			redirect(base_url());
		}

		$context_list = $this->ClientsModel->ContxtAll();

		$data = array(
			'view_file' 	=> 'client/add_client',
			'context_list'	=> $context_list,
		);

		$this->load->view('template/main', $data);
	}

	public function SubmitNewClient() {
		$msg 			= '';
		$usernameTxt 	= $this->input->post('usernameCreate');
		$passwordTxt 	= $this->input->post('passwordCreate');
		$contextTxt 	= $this->input->post('contextCreate');

		if($usernameTxt != '' && $passwordTxt != '' && $contextTxt != '') {
			$checkUname = $this->ClientsModel->CheckClientUsername($usernameTxt);
			if(count($checkUname) == 0) {
				$saveClient = $this->ClientsModel->AddClient($contextTxt, $usernameTxt, sha1($passwordTxt));
				if($saveClient) {
					$msg = 'Create client success';
					redirect(base_url('client-manage?msg='.$msg));
				} else {
					$msg = 'Save data client failed';
					redirect(base_url('client-add?msg='.$msg));
				}
			} else {
				$msg = 'Username already take';
				redirect(base_url('client-add?msg='.$msg));
			}
		} else {
			$msg = 'Empty form';
			redirect(base_url('client-add?msg='.$msg));
		}
	}

	public function ReadRecordingFile() {
		if($this->input->get('path') != '') {
			if(file_exists($this->input->get('path'))) {
	            header('Content-Description: File Transfer');
	            header('Content-Type: application/octet-stream');
	            header('Content-Disposition: attachment; filename="'.basename($this->input->get('path')).'"');
	            header('Expires: 0');
	            header('Cache-Control: must-revalidate');
	            header('Pragma: public');
	            header('Content-Length: ' . filesize($this->input->get('path')));
	            flush(); // Flush system output buffer
	            readfile($this->input->get('path'));
	        } else {
	         	http_response_code(404);
		        die();
	        }
		} else {
			http_response_code(404);
	        die();
		}
	}
}
