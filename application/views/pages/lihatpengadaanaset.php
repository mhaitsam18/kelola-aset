<?php $this->load->view('main/header2');?> 
<!DOCTYPE html>
<html>
<head>
	<title>Data Pengadaan</title>
</head>
<body>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pengadaan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Diskripsi</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Vendor</th>
                    <th>Action</th>
                   </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data as $p){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
        <td><?php echo $p->nama ?></td>
				<td><?php echo $p->jenis ?></td>
				<td><?php echo $p->kategori ?></td>
				<td><?php echo $p->diskripsi ?></td>
        <td><?php echo $p->jumlah ?></td>
        <td><?php echo $p->tgl_pemesanan ?></td>
        <td><?php echo $p->vendor ?></td>
        <td>
          <button><a href="<?php echo base_url(); ?>c_control1/cetak_pengadaan/<?php echo $p->nama?>">Print</a></button>
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