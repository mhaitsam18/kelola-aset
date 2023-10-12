<?php $this->load->view('main/header'); ?>

<header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
      <h1 class="text-uppercase mb-0">SELAMAT DATANG</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">APLIKASI PENGELOLAAN ASET DAN BARANG HABIS PAKAI</h2>
    </div>
  </header>
<center>
<div class="container">
	<br>
		<button class="btn btn-primary">
			<a href="<?php echo base_url()?>login" class="btn btn-primary btn-block">ASET & BHP</a>
		</button>
		<button class="btn btn-primary">
			<a href="<?php echo base_url()?>login" class="btn btn-primary btn-block">PEMBUANGAN & KELOLA</a>
		</button>
    <button class="btn btn-primary">
      <a href="<?php echo base_url()?>loginadmin" class="btn btn-primary btn-block">ADMIN</a>
    </button>
  </div>
  <br>
  Belum memiliki akun? <a href="<?php echo base_url()?>c_control1/regis">Registrasi</a>
  <br>
 </center>
 <br>
 <br>
 

<?php $this->load->view('main/footer');?>