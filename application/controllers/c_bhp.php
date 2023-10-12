<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_bhp extends CI_Controller {
//=========================================================================
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');
		$this->load->library('Ciqrcode');
		$this->load->database();
		$this->load->library('Pdf');
	}
//========================================================================
public function inputbhp()
	{
		$nm_bhp = $this->input->post('nm_bhp');
		$kategori_bhp = $this->input->post('kategori_bhp');
		$satuan_bhp = $this->input->post('satuan_bhp');
		$jumlah_bhp = $this->input->post('jumlah_bhp');
		$tanggal_bhp = $this->input->post('tanggal_bhp');
		
		if($this->input->post('id')){
			$id = $this->input->post('id');
			
			$data2 = array(
			'nm_bhp' => $nm_bhp,
			'kategori_bhp' => $kategori_bhp,
			'satuan_bhp' => $satuan_bhp,
			'jumlah_bhp' => $jumlah_bhp,
			'tanggal_bhp' => $tanggal_bhp
			);

			$this->model->editbhp($id,$data2);
			redirect('c_bhp/reset','refresh');	
		
			}
			else{
				$data2 = array(
				'nm_bhp' => $nm_bhp,
				'kategori_bhp' => $kategori_bhp,
				'satuan_bhp' => $satuan_bhp,
				'jumlah_bhp' => $jumlah_bhp,
				'tanggal_bhp' => $tanggal_bhp
				);

				$this->model->inbhp($data2,'bhp');
				redirect('c_bhp/reset');
			}
		}
//=========================================================================
	public function reportbhp()
		{
			$data2['data2'] = $this->model->tampilbhp()->result();
			$this->load->view('pages/reportbhp', $data2);
		}

	public function tampiltrackrecorbhp(){
		$data2['data'] = $this->model->tampiltrackbhp()->result();
		$this->load->view('pages/tbhp', $data2);
	}
//=========================================================================
public function editbhpwhere($value)
	{
		$data2['data2'] = $this->model->editwhere1($value)->row();
		$this->load->view('pages/inputbhp', $data2);
	}
//=========================================================================
	public function hapusbhp($id){
		$where = array('id_bhp' => $id);
		$this->model->hapusbhpwhere($where, 'bhp');
		redirect('c_bhp/reportbhp');
	}
//=========================================================================
public function updatestokbhp()
	{
		$form = $this->input->post();

		if ($form['jumlahPakai'] > 0) {
			$hasil = $form['jumlahStok'] - $form['jumlahPakai'];
			if ($hasil < 0) {
				$data2['data2'] = $this->model->tampilbhp()->result();
				$data2['notif'] = '<script>
                					  alert("JUMLAH BHP TIDAK TERSEDIA");
                				   </script>';
                $this->load->view('pages/reportbhp', $data2);
			}
			else {
				$data = array('jumlah_bhp' => $hasil);
				$this->model->editbhp($form['id_bhp'], $data);
				redirect('c_bhp/reportbhp','refresh');
			}
		}
		else{
			$data2['data2'] = $this->model->tampilbhp()->result();
			$data2['notif'] = '<script>
               					  alert("JUMLAH BHP TIDAK TERSEDIA");
               				   </script>';
            $this->load->view('pages/reportbhp', $data2);
		}
	}
//=========================================================================
	public function reset()
	{
		$this->load->view('pages/dashboard');
	}
//=========================================================================
	public function cetak_bhp($id)
        {
            $data['bhp'] = $this->model->get_bhp($id);
            $this->load->view('pages/printbhp', $data);
        }
}
?>