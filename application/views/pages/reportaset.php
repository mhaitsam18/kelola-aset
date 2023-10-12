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
                <center>
    			<button><a href="<?php echo base_url()?>inputaset">TAMBAH</a></button>
                </center>
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
                    <th>Status</th>
                    <th>Tanggal Pakai</th>
                    <th>Action</th>
                  </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data1 as $t){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
        <td><?php echo $t->serial_aset ?></td>
				<td><?php echo $t->nm_aset ?></td>
				<td><?php echo $t->kategori_aset  ?></td>
				<td><?php echo $t->diskripsi_aset ?></td>
        <td><?php echo $t->tanggal_masuk ?></td>
        <td>
          <img src="<?php echo base_url('c_aset/qrcode/'.$t->serial_aset)?>" alt=''>
        </td>
        <td><?php echo $t->status ?></td>
          <td><?php echo $t->tanggal_pakai?></td>
          <td>
          <button><a href="<?php echo base_url(); ?>c_aset/cetak_aset/<?php echo $t->serial_aset?>">Print</a></button>
				 <button><a href="<?php echo base_url()?>c_aset/editasetwhere/<?php echo $t->serial_aset ?>">EDIT</a></button>
         <button><a href="<?php echo base_url()?>c_aset/hapusaset/<?php echo $t->serial_aset ?>">HAPUS</a></button>
         <button><a href="<?php echo base_url()?>c_aset/pakai_aset/<?php echo $t->serial_aset ?>">PAKAI</a></button>
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