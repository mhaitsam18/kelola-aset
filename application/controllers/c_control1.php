<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_control1 extends CI_Controller {
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
	public function indek()
	{
		$data1['serial_aset'] = $this->db->get('smanset')->result();
		$this->load->view('reportaset',$data1);
	}
//==================================DAFTAR=======================================
	public function daftar()
	{
		//$serial_aset = $this->input->post('serial_aset');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->valid_email($email) == TRUE) {		
			$data = array(
			'nama' => $nama,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'email' => $email,
			'password' => $password,
			'status' => 'menunggu aktivasi'
			);

			$this->model->register($data,'user');
			redirect('c_control1/reset2');	
		}
		else{
			echo "Email Tidak Sesuai";
		}		
	}
	private function valid_email($str)
	{
    	return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
//=====================================================================================
	public function approvePengelola()
		{
			$id_user = $this->input->get('id_user');

			$data = array('status' => 'aktif');

			$this->model->approvePengelola($data, 'user', $id_user);
			redirect('controladmin/reportpengelola','refresh');
		}	
//=====================================================================================
	public function reset()
	{
		$this->load->view('pages/dashboard');
	}
//=====================================================================================
	public function reset2()
	{
		$this->load->view('pages/login');
	}
//==================================MASUK REGIS=========================================
	public function regis()
	{
		$this->load->view('pages/registrasi');
	}
//==================================LOGIN MULTI=======================================
	public function login()
	{
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$user=$this->input->get('u');
		$cek= $this->model->selectdata($nama,$password)->num_rows();
		$cek1= $this->model->selectdata($nama,$password)->result();
			if($cek == 1){
				if ($cek1[0]->jabatan == "pengelola aset dan BHP") {
					$data_session=array(
					'nama'=>$nama,
					'password'=> $password 
				);
				$this->session->set_userdata($data_session);

				redirect('c_control1/reset'.$user);	
				}else{
					$data_session=array(
					'nama'=>$nama,
					'password'=> $password 
				);
				$this->session->set_userdata($data_session);

				redirect('c_control1/reset1'.$user);
				}
			}else{
				echo "Data Tidak Ada";
			}
	}
//=================================AWAL========================================

	public function index($value='home')
	{
		$this->load->view('pages/'.$value);
	}
//=========================================================================
	public function jumlahpengadaan()
	{
		$data['data_pengadaan'] = $this->model->Countpeng();
	}
//==================================INPUT PENGADAAN=======================================
	public function inputpengadaan()
	{
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$kategori = $this->input->post('kategori');
		$diskripsi = $this->input->post('diskripsi');
		$jumlah = $this->input->post('jumlah');
		$satuan = $this->input->post('satuan');
		$tgl_pemesanan = $this->input->post('tgl_pemesanan');
		$vendor = $this->input->post('vendor');
		
		
		if($this->input->post('id')){
			$id = $this->input->post('id');
			
			$data = array(
			'nama' => $nama,
			'jenis' => $jenis,
			'kategori' => $kategori,
			'diskripsi' => $diskripsi,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'tgl_pemesanan' => $tgl_pemesanan,
			'vendor' => $vendor
			);

			$this->model->editpeng($id,$data);
			redirect('c_control1/reset','refresh');	
		
			}
		else{
			$data = array(
			'nama' => $nama,
			'jenis' => $jenis,
			'kategori' => $kategori,
			'diskripsi' => $diskripsi,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'tgl_pemesanan' => $tgl_pemesanan,
			'vendor' => $vendor
			);

				$this->model->inpeng($data,'pengadaan');
				redirect('c_control1/reset');
			}
		}
//===================================TAMPIL PENGADAAN======================================
	public function reportpengadaanbhp()
		{
			$data['data'] = $this->model->tampilpengadaanbhp()->result();
			$this->load->view('pages/lihatpengadaanbhp', $data);
		}
//=========================================================================
	public function reportpengadaanaset()
		{
			$id = $this->input->get('id');
			$data['data'] = $this->model->tampilpengadaanaset()->result();
			$this->load->view('pages/lihatpengadaanaset', $data);
		}
//=========================================================================
	public function pengadaanbhp()
		{
			$namabhp = $this->input->post('namabhp');
			$satuanbhp = $this->input->post('satuanbhp');
			$jumlahbhp = $this->input->post('jumlahbhp');
			$diskripsibhp = $this->input->post('diskripsibhp');
			$vendorbhp = $this->input->post('vendorbhp');
			
			
			if($this->input->post('id')){
				$id = $this->input->post('id');
				
				$dat1 = array(
				'id' => $id,
				'namabhp' => $namabhp,
				'satuanbhp' => $satuanbhp,
				'jumlahbhp' => $jumlahbhp,
				'diskripsibhp' => $diskripsibhp,
				'vendorbhp' => $vendorbhp
				);

				$this->model->editpengbhp($id,$dat1);
				redirect('c_control1/reset','refresh');	
			
				}
				else{
				$dat1 = array(
					'namabhp' => $namabhp,
					'id' => $id,
					'satuanbhp' => $satuanbhp,
					'jumlahbhp' => $jumlahbhp,
					'diskripsibhp' => $diskripsibhp,
					'vendorbhp' => $vendorbhp
					);

					$this->model->inpengbhp($dat1,'pengadaanbhp');
					redirect('c_control1/reset');
				}
			}
//=========================================================================
//=========================================================================
	public function VinputBHP()
	{
		$id = $this->input->get('id');
		$data['data'] = $this->model->tampilBHPid($id);
		$this->load->view('pages/inputbhp', $data);
	}
//=========================================================================
	public function reset1()
	{
		$this->load->view('pages/dashboard1');
	}
//=========================================================================
      public function cetak_pengadaan($id)
        {
            $data['pengadaan'] = $this->model->get_pengadaan($id);
            $this->load->view('pages/printpengadaan', $data);
        }     

}


/* End of file c_contol.php */
/* Location: ./application/controllers/c_contol.php */
?>