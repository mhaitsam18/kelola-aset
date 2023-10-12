<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_aset extends CI_Controller {
//=========================================================================
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');
		$this->load->library('Ciqrcode');
		$this->load->database();
		$this->load->library('Pdf');
	}
//==================================QR CODE=======================================
	public function qrcode($data1)
	{
		QRcode::png(
			$data1,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 2, 
			$margin = 1
		);
	}
//==================================Input Aset====================================
public function inputaset()
	{
		//$serial_aset = $this->input->post('serial_aset');
		$nm_aset = $this->input->post('nm_aset');
		$kategori_aset = $this->input->post('kategori_aset');
		$diskripsi_aset = $this->input->post('diskripsi_aset');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		
		if($this->input->post('id')){
			$id = $this->input->post('id');
			
			$data1 = array(
			'serial_aset' => md5($nm_aset),
			'nm_aset' => $nm_aset,
			'kategori_aset' => $kategori_aset,
			'diskripsi_aset' => $diskripsi_aset,
			'tanggal_masuk' => $tanggal_masuk,
			);

			$this->model->editaset($id,$data1);
			redirect('c_aset/reset','refresh');	
		
			}
			else{
				$data1 = array(
				'serial_aset' => md5($nm_aset),
				'nm_aset' => $nm_aset,
				'kategori_aset' => $kategori_aset,
				'diskripsi_aset' => $diskripsi_aset,
				'tanggal_masuk' => $tanggal_masuk,
				'status' => 'belum terpakai'
				);

				$this->model->inset($data1,'aset');
				redirect('c_aset/reset');
			}
		}
//================================Tampil Aset==============================
	public function reportaset()
		{
			$data1['data1'] = $this->model->tampilaset()->result();
			$this->load->view('pages/reportaset', $data1);
		}
//===============================Pemakaian Aset============================
	public function pemakaianaset()
		{
			$data1['data1'] = $this->model->pemakaianaset()->result();
			$this->load->view('pages/pemakaianaset', $data1);
		}
//=============================Edit Status Pemakaian=======================
	public function pakai_aset($value)
	{
		$tgl_pakai = date("Y-m-d");
		$data1= array(
			'tanggal_pakai' => $tgl_pakai,
			'status' => 'sudah terpakai');
		$this->model->pakai_aset($value, $data1);
		$datapakai = $this->model->selectpakai($value);
		$datap= array(
			'serial_aset' => $datapakai[0]->serial_aset,
			'nm_aset' => $datapakai[0]->nm_aset,
			'kategori_aset' => $datapakai[0]->kategori_aset,
			'diskripsi_aset' => $datapakai[0]->diskripsi_aset,
			'tanggal_masuk' => $datapakai[0]->tanggal_masuk,
			'qrcode' => $datapakai[0]->qrcode,
			'status' => $datapakai[0]->status,
			'tanggal_pakai' => $datapakai[0]->tanggal_pakai
		);
		$this->model->tambah_pakaiaset($datap);
		$this->reportaset();
	}
//============================Edit Aset==================================
	public function editasetwhere($value)
	{
		$data1['data1'] = $this->model->editwhere($value)->row();
		$this->load->view('pages/inputaset', $data1);
	}
//========================Hapus Aset=====================================
	public function hapusaset($id){
		$where = array('serial_aset' => $id);
		$this->model->hapusasetwhere($where, 'aset');
		redirect('c_aset/reportaset');
	}
//====================Pakai Aset==========================================
	public function pakaiaset($id){
		$where = array('serial_aset' => $id);
		$this->model->pakaiasetwhere($where, 'aset');
		redirect('c_aset/reportaset');
	}
//=========================================================================
	public function reset()
	{
		$this->load->view('pages/dashboard');
	}
//=========================Print Aset====================================
	 public function cetak_aset($id)
        {
            $data['aset'] = $this->model->get_aset($id);
            $this->load->view('pages/printaset', $data);
        }
//========================================================================
	public function cetak_asetpakai($id)
	        {
	        	 $data['aset'] = $this->model->get_aset($id);
            	$this->load->view('pages/printasetpakai', $data);
	        }        


}
?>