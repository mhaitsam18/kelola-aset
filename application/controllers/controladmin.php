<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladmin extends CI_Controller {
//=========================================================================
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');
		$this->load->library('Ciqrcode');
		$this->load->database();
		$this->load->library('Pdf');
	}
//=========================================================================
	function aksi_login(){
		$ussername = $this->input->post('ussername');
		$password = $this->input->post('password');
		$cek = $this->model->selectdataadmin("admin",$password)->result();
		if($cek > 0){
 
			$data_session = array(
				'ussername' => $ussername,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('controladmin/reset' .$admin);
 
		}else{
			echo "Ussername dan password salah !";
		}
	}
//=========================================================================
	public function reset()
	{
		$this->load->view('pages/dashboardadmin');
	}
//=========================================================================
	public function reportpengelola()
		{
			$data['data'] = $this->model->tampilpengelola()->result();
			$this->load->view('pages/reportpengelola', $data);
		}
}
?>