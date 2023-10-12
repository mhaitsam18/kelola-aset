<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	public function index($value='home')
	{
		$this->load->view('pages/'.$value);
	}

	public function cek()
	{
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$user=$this->input->get('u');
		$cek= $this->model->selectdata($username,$password)->num_rows();
			if($cek > 0){

				$data_session=array(
					'username'=>$username,
					'password'=> $password 
				);
				$this->session->set_userdata($data_session);

				redirect('c_control/dash?u='.$user);

			}else{
				echo "Data Tidak Ada";
			}
	}

	public function dash()
	{
		//$this->load->view('pages/dashboard');
		$value=$this->input->get('u');
		if ($value=='a') {
			$this->load->view('pages/dashboard');
		}
		else{
		$this->load->view('pages/dashboard1');	
		}
	}

	public function login($value)
	{
		redirect(base_url().'v_login?u='.$value,'refresh');
	}



	public function tampiltrackrecord(){
		$data1['data'] = $this->model->tampiltrackaset()->result();
		$this->load->view('pages/bakallimbah', $data1);
	}

	public function acc(){
		$data1['data'] = $this->model->limbahnonmedis()->result();
		//print_r($data1);
		$this->load->view('pages/pelaporannonmedis', $data1);
	}

	public function hapusnonlimbah($id){
		$where = array('serialAset' => $id);
		$this->model->hapusnon($where, 'asethistory');
		redirect('c_control/acc');
	}

	public function tampiltrackrecordbhp(){
		$data2['data'] = $this->model->tlimbahmedis()->result();
		$this->load->view('pages/bakallimbahnon', $data2);
	}

	public function accmedis(){
		$data2['data'] = $this->model->limbahmedis()->result();
		$this->load->view('pages/pelaporanlimbah', $data2);
	}

	public function hapuslimbah($id){
		$where = array('idbhp' => $id);
		$this->model->deletlimbah($where, 'bhphistory');
		redirect('c_control/accmedis');
	}
	
	//public function redrct(){
	//	$this->load->view('pages/bakallimbahnon');
	//}

	public function pmbngnmedis(){
		$data2['data'] = $this->model->pembuanganmedis()->result();
		$this->load->view('pages/tr_pembuangan', $data2);
	}

	public function datalimbahmedis(){
		$data['data'] = $this->model->datalimbahmedis()->result();
		$this->load->view('pages/datalimbah_medis', $data);
	}

	public function datalimbahnonmedis(){
		$data['data'] = $this->model->datalimbah_nonmedis()->result();
		$this->load->view('pages/datalimbah_non', $data);
	}

	public function pmbngn($id){
		$where = array('idlimbah' => $id);
		$this->model->hapuspmbmedis($where, 'limbah');
		redirect('c_control/pmbngnmedis');
	}

	public function pmbngnnonmedis(){
		$data1['data'] = $this->model->pembuangannon()->result();
		$this->load->view('pages/tr_pembuangannon', $data1);
	}

	public function pembuangannonlimbah($id){
		$where = array('id_non' => $id);
		$this->model->hapuspmbnon($where, 'limbahnon');
		redirect('c_control/pmbngnnonmedis');
	}
	//public function agung(){
	//	$akbar = $this->model->panggilprosedur()->result();
	//	echo $akbar[0]->x;
	//}	

}


/* End of file c_contol.php */
/* Location: ./application/controllers/c_contol.php */
?>