<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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

		$last_call 		= $this->ClientsModel->LastCallHistory();
		$total_duration = $this->ClientsModel->TotalDurationCallHistory();
		$total_billsec 	= $this->ClientsModel->TotalBillSecCallHistory();

		$data = array(
			'view_file' 		=> 'report/dashboard',
			'last_call' 		=> $last_call,
			'total_duration' 	=> $total_duration,
			'total_billsec' 	=> $total_billsec,
		);

		$this->load->view('template/main', $data);
	}

	public function CallHistory() {
		// $this->session->userdata('uname')
		// $this->session->userdata('role');

		if($this->session->userdata('uname') == '') {
			redirect(base_url());
		}

		$cdr_list = $this->ClientsModel->GetCallHistory();

		$data = array(
			'view_file' 	=> 'report/history',
			'cdr_list'		=> $cdr_list,
		);

		$this->load->view('template/main', $data);
	}
}
