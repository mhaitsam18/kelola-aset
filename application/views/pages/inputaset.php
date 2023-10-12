<?php $this->load->view('main/header2');?>
<htmL>
<head>
	<center>
	<title>Input Aset</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?> asset3/css/bootstrap.css">
	<script src="<?php echo base_url()?> asset3/js/jquery.js"></script>
	<script src="<?php echo base_url()?> asset3/js/bootstrap.min.js"></script>
</head>
<body>
<table style="margin:20px auto;" border="1">
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		<h2 class="page-header"> Input Aset</h2>
			<form class="user" method="POST" action="<?php echo base_url()?>c_aset/inputaset">
				<div class="form-group">


					<label>Nama Aset</label><br>
					<input type="text" name="nm_aset" class="form-control" placeholder="Nama Aset" value="<?php if(isset($data1->nm_aset)) echo $data1->nm_aset;?>"></br>

					<label>Kategori Aset</label><br>
					<select class="custom-select custom-select-lg mb-3" name="kategori_aset" value="<?php if(isset($data1->kategori_aset)) echo $data1->kategori_aset;?>">
					<option value="elk">Elektronik</option>
					<option value="prb">Perabotan</option>
					<option value="prb">Tanah</option>
					<option value="prb">Kendaraan</option>
					</select>

					<label>Diskripsi Aset</label><br>
					<textarea type="text" name="diskripsi_aset" class="form-control" cols="40" rows="5" placeholder="Diskripsi Aset"> <?php if(isset($data1->diskripsi_aset)) echo $data1->diskripsi_aset;?></textarea>

					<!-- <label>Qrcode</label><br> -->
					<!-- <input type="text" name="qrcode" placeholder="Qrcode" value="<?php //if(isset($data1->//md5('nm_aset'))) echo $data1->md5('nm_aset');?>"></br> -->

					<label>Tanggal Masuk</label><br>
					<input type="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk" value="<?php if(isset($data1->tanggal_masuk)) echo $data1->tanggal_masuk;?>"><br>


					<input type="text" name="id" value="<?php if(isset($data1->serial_aset)) echo $data1->serial_aset;?>" hidden>
					<button class="btn btn-danger" type="submit">Simpan</button>
					
				</div>	
			</form>
		</div>	
	</div>	
</div>
</table>
</body>
</html>
<?php $this->load->view('main/footer2');?>