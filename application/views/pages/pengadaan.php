  <?php $this->load->view('main/header2');?>
<htmL>
<head>
	<center>
	<title>PENGADAAN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?> asset3/css/bootstrap.css">
	<script src="<?php echo base_url()?> asset3/js/jquery.js"></script>
	<script src="<?php echo base_url()?> asset3/js/bootstrap.min.js"></script>
</head>
<center>
<body>	
<table style="margin:20px auto;" border="1">
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		<h2 class="page-header">Masukkan Pengadaan</h2>
			<form class="user" method="POST" action="<?php echo base_url()?>c_control1/inputpengadaan">
				<div class="form-group">

					<label>Nama</label><br>
					<input type="text" name="nama" class="form-control" placeholder="nama" value="<?php if(isset($data->nama)) echo $data->nama;?>"><br>

					<label>Jenis</label><br>
					<select class="custom-select custom-select-lg mb-3" name="jenis" value="<?php if(isset($data->jenis)) echo $data->jenis;?>">
					<option value="Aset">Aset</option>
					<option value="BHP">BHP</option>
					</select>
				

					<label>Kategori</label><br>
					<select class="custom-select custom-select-lg mb-3" name="kategori" value="<?php if(isset($data->kategori)) echo $data->kategori;?>">
					<option value="elk">Elektronik</option>
					<option value="prb">Perabotan</option>
					<option value="mds">Medis</option>
					<option value="nmds">Non Medis</option>
					</select>

					<label>Diskripsi</label><br>
					<textarea type="text" name="diskripsi" class="form-control" cols="40" rows="5" placeholder="Diskripsi"> <?php if(isset($data->diskripsi)) echo $data->diskripsi;?></textarea>

					<label>Jumlah</label><br>
					<input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php if(isset($data->jumlah)) echo $data->jumlah;?>"><br>

					<label>Satuan</label><br>
					<select class="custom-select custom-select-lg mb-3" name="satuan" value="<?php if(isset($data->satuan)) echo $data->satuan;?>">
					<option value="unit">Unit</option>
					<option value="pcs">Pcs</option>
					<option value="box">Box</option>
					</select>

					<label>Tanggal Pemesanan</label><br>
					<input type="date" name="tgl_pemesanan" class="form-control" placeholder="Tanggal Pesan" value="<?php if(isset($data->tgl_pemesanan)) echo $data->tgl_pemesanan;?>"><br>

					<label>Vendor</label><br>
					<input type="text" name="vendor" class="form-control" placeholder="Vendor" value="<?php if(isset($data->vendor)) echo $data->vendor;?>"><br>

					<button class="btn btn-danger" type="submit">Simpan</button>
					
				</div>	
			</form>
		</div>	
	</div>	
</div>
</table>
</body>
</center>
</html>
<?php $this->load->view('main/footer2');?>