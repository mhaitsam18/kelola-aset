<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihanPrakUnitTest extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}

	public function convert($fahrenheit){

		return round(($fahrenheit - 32)*(5/9),2);
	}


	public function angkatan($nim){
		return intval('20' .substr($nim, 4, 2));
	}


	public function testConvert120(){
		$this->unit->run($this->convert(120), 48.89, "120 F");
	}

	public function testConvert0(){
		$this->unit->run($this->convert(32), 0, '32 F');
	}

	public function testAngkatan(){
		$this->unit->run($this->angkatan("6701174021"), "2017", 'Angkatan 2017');
	}

	public function prodi($nim){
		if($nim == 1){
			return "D3 MI";
		}
		elseif($nim == 2){
			return "D3 KA";
		}
		elseif($nim == 3){
			return "D3 TK";
		}
		elseif ($nim == 4) {
			return "D3 PP";
		}
		else{
			return "Not Found";
		}
	}

	public function testProdi(){
		$this->unit->run($this->prodi("1"), "D3 MI", "D3 Manajemen Informatika");
	}
	public function testProdi1(){
		$this->unit->run($this->prodi("2"), "D3 KA", "D3 Komputer Akutansi");
	}
	public function testProdi2(){
		$this->unit->run($this->prodi("3"), "D3 TK", "D3 Teknik Komputer");
	}
	public function testProdi3(){
		$this->unit->run($this->prodi("4"), "D3 PP", "D3 Perhotelan");
	}
	public function testProdi4(){
		$this->unit->run($this->prodi("90"), "Not Found", "Data Tidak Ditemukan");
	}

	public function testAll(){
		$this->testConvert120();
		$this->testConvert0();
		$this->testAngkatan();
		$this->testProdi();
		$this->testProdi1();
		$this->testProdi2();
		$this->testProdi3();
		$this->testProdi4();
		echo $this->unit->report();
	}


}


?>