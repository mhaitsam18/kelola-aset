<?php $this->load->view('main/header2');?>
<htmL>
<head>
	<center>
	<title>Input BHP</title>
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
		<h2 class="page-header"> Input BHP</h2>
			<form class="user" method="POST" action="<?php echo base_url()?>c_bhp/inputbhp">
				<div class="form-group">
					<label>Nama BHP</label><br>
					<input type="text" name="nm_bhp" class="form-control" placeholder="Nama BHP" value="<?php if(isset($data2->nm_bhp)) echo $data2->nm_bhp;?>">


					<label>Kategori BHP</label><br>
					<select class="custom-select custom-select-lg mb-3" name="kategori_bhp" value="<?php if(isset($data2->kategori_bhp)) echo $data2->kategori_bhp;?>">
					<option value="non medis">Non Medis</option>
					<option value="medis">Medis</option>
					</select>

					<label>Satuan BHP</label><br>
					<input type="text" name="satuan_bhp" class="form-control" placeholder="Satuan BHP" value="<?php if(isset($data2->satuan_bhp)) echo $data2->satuan_bhp;?>">

					<label>Jumlah BHP</label><br>
					<input type="text" name="jumlah_bhp" class="form-control" placeholder="Diskripsi Aset" value="<?php if(isset($data2->jumlah_bhp)) echo $data2->jumlah_bhp;?>">

					<label>Tanggal Masuk</label><br>
					<input type="date" name="tanggal_bhp" class="form-control" placeholder="Tanggal BHP" value="<?php if(isset($data2->tanggal_bhp)) echo $data2->tanggal_bhp;?>"><br>

					<input type="text" name="id" value="<?php if(isset($data2->id_bhp)) echo $data2->id_bhp;?>" hidden>
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