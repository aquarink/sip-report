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

	public function RecordingHistory() {
		// $this->session->userdata('uname')
		// $this->session->userdata('role');

		if($this->session->userdata('uname') == '') {
			redirect(base_url());
		}

		$cdr_list = $this->ClientsModel->GetCallHistory();

		$timeDownloadConf = "./assets/download.time.conf";
		$downloadFlag = false;
					
		if (file_exists($timeDownloadConf)) {
			if(filesize($timeDownloadConf) > 0) {

				$fileOpen = fopen($timeDownloadConf, "r");
				$fieldText = fread($fileOpen, filesize($timeDownloadConf));
				fclose($fileOpen);

				//
				$explField = explode(',', $fieldText);
				foreach ($explField as $key => $val) {

					if(date('H') == $val) {
						$downloadFlag = true;
					}
				}
			}
		}

		$data = array(
			'view_file' 	=> 'report/recording',
			'cdr_list'		=> $cdr_list,
			'download_flag' => $downloadFlag,
		);

		$this->load->view('template/main', $data);
	}

	public function SetTimeDownload() {
		if($this->session->userdata('uname') != '' && $this->session->userdata('role') == 'admin') {
			$timeDownload = $this->input->post('timeForDownload');

			if($timeDownload != '') {

				$path = './assets/';
				if (!file_exists($path)) { mkdir($path, 0777, true); }

		    	// File
		    	$fileMT = $path."download.time.conf";

		    	// Data
		    	$dataMt = $timeDownload;

		        $fileOpen  = fopen($fileMT,"a");

		        try {
		            fwrite($fileOpen, $dataMt);
		            fclose($fileOpen);

		            redirect(base_url('client-voice?msg=Success sets time'));
		        } catch (Exception $e) {
		            redirect(base_url('client-voice?msg=Failed sets time'));
		        }

			} else {
				redirect(base_url('client-voice?msg=Set time first'));
			}
		} else {
			redirect(base_url('client-voice?msg=Not Authorized'));
		}
	}

	public function ReadFileRecording() {

		if($this->input->get('voice') != '') {

			$path 		= "/var/spool/asterisk/monitor/";
			$filenya 	= $path.$this->input->get('voice');

			if(file_exists($filenya)) {
				header('Content-Type: application/octet-stream');
				header("Content-Transfer-Encoding: Binary"); 
				header("Content-disposition: attachment; filename=\"" . basename($filenya) . "\""); 
				readfile($filenya); 
			}
		}
	}
}
