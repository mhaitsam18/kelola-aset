<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

	public function selectdata($nama,$password)
	{
		$this->db->where('nama',$nama);
		$this->db->where('password',$password);
		return $this->db->get('user');
	}

	public function selectdataadmin($ussername,$password)
	{
		$this->db->where('ussername',$ussername);
		$this->db->where('password',$password);
		return $this->db->get('admin');
	}

	public function Countpeng()
	{
		$this->db->select("count(id_pengadaan) as jumlah_pengset");
		$data = $this->db->from("pengadaan")->get();
		return $data->row();
	}

	public function Countaset()
	{
		$this->db->select("count(serial_aset) as jumlah_aset");
		$data = $this->db->from("aset")->get();
		return $data->row();
	}

	public function approvePengelola($data, $table, $where)
	{
		$this->db->where('id_user', $where);
		$this->db->update($table, $data);
	}


	//public function editdata1($id){
	//	$this->db->where('idMedis', $id);
	//	return $this->db->get('medis');
	//}

	//public function editdata($id,$data){
	//	$this->db->where('idMedis', $id);
	//	$this->db->update('medis', $data);
	//}
	public function pembuanganmedis(){
		return $this->db->get('pmbmedis');
	}

	public function hapuspmbmedis($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function pembuangannon(){
		return $this->db->get('pmbnon');
	}

	public function hapuspmbnon($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function limbahnonmedis(){
		$this->db->where('kategori_non', 'elk');
		return $this->db->get('limbahnon');
	}

	public function datalimbahmedis(){
		$this->db->where('kategori','medis');
		return $this->db->get('limbah');
	}

	public function datalimbah_nonmedis(){
		$this->db->where('kategori','non medis');
		return $this->db->get('limbah');
	}


	public function hapusnon($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tlimbahmedis(){
		return $this->db->get('bhphistory');
	}

	function acclimbah($data1){
		$this->db->insert('limbahnon', $data1);
	}

	function limbahmedis(){
		$this->db->where('kategori_non', 'prb' );
		return $this->db->get('limbahnon');
		//return $this->db->get('limbah');
	}

	function deletlimbah($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	//public function caridataNon($pk){
		//$this->db->where('serial_aset', $pk);
		//return $this->db->get('aset');
	//}

	function hapusdata($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
//=========================================================================
	function hitungJumlahAsset()
{   
    $query = $this->db->get('aset');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
//=========================================================================
	public function register($data,$table)
	{
		$this->db->insert($table,$data);
	}
//=========================================================================
	public function tampilpengelola(){
		return $this->db->get('user');
	}
//=============================================================
	public function inset($data1,$table)
	{
		$this->db->insert($table,$data1);
	}
//=========================================================================
	public function inpeng($data,$table)
	{
		$this->db->insert($table,$data);
	}
//=========================================================================
	public function tampilpengadaanbhp(){
		$this->db->select('*');
		$this->db->from('pengadaan');
		$this->db->where('jenis', 'BHP');
		return $this->db->get();
	}
//=========================================================================
	public function tampilBHPid($id)
	{
		$this->db->select('*');
		$this->db->from('pengadaan');
		$this->db->where('id_pengadaan', $id);
		return $this->db->get()->result();
	}
//=========================================================================
	public function tampilpengadaanaset(){
		$this->db->select('*');
		$this->db->from('pengadaan');
		$this->db->where('jenis', 'aset');
		return $this->db->get();
	}
//=========================================================================
	public function tampilaset(){
		$this->db->where('status','belum terpakai');
		return $this->db->get('aset');
	}
//=========================================================================
	public function pemakaianaset(){
		$this->db->where('status','sudah terpakai');
		return $this->db->get('aset');
	}
//=========================================================================
	public function pakai_aset($id, $data1)
	{
		$this->db->where('serial_aset', $id);
		$this->db->update('aset', $data1);
	}
//===========================================================================
	public function tambah_pakaiaset($data)
	{
		$this->db->insert('pemakaianaset',$data);
	}
//========================================================================
	public function selectpakai($id)
	{
		$this->db->select("*");
		$this->db->from('aset');
		$this->db->where('serial_aset', $id);

		return $this->db->get()->result();
	}
//=========================================================================
	public function tampiltrackaset(){
		return $this->db->get('asethistory');
	}

	public function tampiltrackbhp(){
		return $this->db->get('bhphistory');
	}

//=========================================================================
	public function editaset($id,$data1)
	{
		$this->db->where('serial_aset', $id);
		$this->db->update('aset', $data1);
	}
//=========================================================================
	public function editwhere($id)
	{
		$this->db->where('serial_aset', $id);
		return $this->db->get('aset');
	}
//=========================================================================
	public function hapusasetwhere($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
//=========================================================================
	public function inpengbhp($dat1,$table)
	{
		$this->db->insert($table,$dat1);
	}
//=========================================================================
	public function inbhp($data2,$table)
	{
		$this->db->insert($table,$data2);
	}
//=========================================================================
	public function tampilbhp(){
		return $this->db->get('bhp');
	}
//=========================================================================
	public function editbhp($id,$data2)
	{
		$this->db->where('id_bhp', $id);
		$this->db->update('bhp', $data2);
	}
//=========================================================================
	public function editwhere1($id)
	{
		$this->db->where('id_bhp', $id);
		return $this->db->get('bhp');
	}	
//=========================================================================
	public function hapusbhpwhere($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

// ========================================================================
	public function get_aset($id)
    {	
		$data = $this->db->query("SELECT * FROM aset 
				where serial_aset = '$id' ");
       return $data->result_array();
    }
// ========================================================================
 	public function get_bhp($id)
    {	
		$data = $this->db->query("SELECT * FROM bhp 
				where id_bhp = '$id' ");
       return $data->result_array();
    }
// ========================================================================
 	public function get_pengadaan($id)
    {	
		$data = $this->db->query("SELECT * FROM pengadaan 
				where nama = '$id' ");
       return $data->result_array();
    }
//=========================================================================
  //   public function get_pengbhp($id)
  //   {	
		// $data = $this->db->query("SELECT * FROM pengadaanbhp 
		// 		where id = '$id' ");
  //      return $data->result_array();
  //   }
}

/* End of file model.php */
/* Location: ./application/models/model.php */
?>