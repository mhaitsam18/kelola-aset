<?php $this->load->view('main/header2');?> 
<!DOCTYPE html>
<html>
<head>
	<title>Report Aset</title>
</head>
<body>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Aset</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Serial Aset</th>
                    <th>Nama Aset</th>
                    <th>Kategori Aset</th>
                    <th>Diskripsi Aset</th>
                    <th>Tanggal Masuk</th>
                    <th>QR Code</th>
                  </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data as $t){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
        <td><?php echo $t->serialAset ?></td>
				<td><?php echo $t->namaAset ?></td>
				<td><?php echo $t->kategori  ?></td>
				<td><?php echo $t->diskripsiAset ?></td>
        <td><?php echo $t->tanggalKel ?></td>
        <td>
          <img src="<?php echo base_url('c_control1/qrcode/'.$t->serialAset)?>" alt=''>
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