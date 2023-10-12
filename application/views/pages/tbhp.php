<?php $this->load->view('main/header2');?> 
<!DOCTYPE html>
<html>
<head>
	<title>Report BHP</title>
</head>
<body>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data BHP</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>NAMA </th>
                    <th>KATEGORI</th>
                    <th>SATUAN</th>
                    <th>JUMLAH</th>
                    <th>TANGGAL KELUAR</th>
                  </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data as $p){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->idbhp ?></td>
				<td><?php echo $p->namabhp  ?></td>
				<td><?php echo $p->kategoribhp ?></td>
				<td><?php echo $p->satuanbhp ?></td>
        <td><?php echo $p->jumlahbhp ?></td>
        <td><?php echo $p->tanggalkel ?></td>
		</tr>
		<?php } ?>
              </table>
            </div>
          </div>
        </div>
</body>
</html>
<?php $this->load->view('main/footer2');?>