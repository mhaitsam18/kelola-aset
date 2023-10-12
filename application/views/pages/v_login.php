<?php
$this->load->view('main/header');
?>
<br>
<br>
<br>
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      	<?php 
      	$user = $this->input->get('u');
      	?>
        <form action="<?php echo base_url() ?>index.php/c_control/cek?u=<?=$user?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text-center" id="inputnamapengguna" class="form-control" placeholder="nama pengguna" required="required" autofocus="autofocus" name="username">
              <label for="inputEmail">Nama Pengguna</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Kata Sandi" required="required" name="password">
              <label for="inputPassword">Kata Sandi</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lupa kata Sandi
              </label>
            </div>
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Login">
        </form>
       
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>


<?php
$this->load->view('main/footer');
?>