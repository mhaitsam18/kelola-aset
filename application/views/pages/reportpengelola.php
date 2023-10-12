<?php $this->load->view('main/header4');?> 
<!DOCTYPE html>
<html>
<head>
	<title>Report BHP</title>
</head>
<body>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            DATA PENGELOLA</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>JABATAN</th>
                    <th>ALAMAT</th>
                    <th>EMAIL</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data as $aa){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $aa->id_user ?></td>
				<td><?php echo $aa->nama  ?></td>
				<td><?php echo $aa->jabatan ?></td>
				<td><?php echo $aa->alamat ?></td>
        <td><?php echo $aa->email ?></td>
        <td><?php echo $aa->status ?> </td>
				<td>
          <?php if($aa->status == 'menunggu aktivasi'){ ?>
          <a href="<?php echo base_url(); ?>c_control1/approvePengelola?id_user=<?php echo $aa->id_user ?>">
              <button type="button" class="btn btn-success">Approve</button>
          </a>
          <?php } elseif ($aa->status == 'aktif') { ?>
          <a href="#">
              <button type="button" class="btn btn-danger">Cancel</button>
          </a>
          <?php } ?>
			</td>
		</tr>
		<?php } ?>
              </table>
            </div>
          </div>
        </div>
</body>
</html>
<?php $this->load->view('main/footer2');?>