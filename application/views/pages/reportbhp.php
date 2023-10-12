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
                <center>
    			<button><a href="<?php echo base_url()?>inputbhp">TAMBAH</a></button>
                </center>
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama BHP</th>
                    <th>Kategori BHP</th>
                    <th>Satuan BHP</th>
                    <th>Jumlah BHP</th>
                    <th>Tanggal BHP</th>
                    <th>Action</th>
                  </tr>
                </thead>
				<?php 
				$no = 1;
				foreach($data2 as $p){ 
				?>
				<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->nm_bhp ?></td>
				<td><?php echo $p->kategori_bhp  ?></td>
				<td><?php echo $p->satuan_bhp ?></td>
				<td><?php echo $p->jumlah_bhp ?></td>
        <td><?php echo $p->tanggal_bhp ?></td>
				<td>
          <button><a href="<?php echo base_url(); ?>c_bhp/cetak_bhp/<?php echo $p->id_bhp?>">Print</a></button>
				 <button><a href="<?php echo base_url()?>c_bhp/editbhpwhere/<?php echo $p->id_bhp ?>">EDIT</a></button>
         <button><a href="<?php echo base_url()?>c_bhp/hapusbhp/<?php echo $p->id_bhp ?>">HAPUS</a></button>
         <form method="POST" action="<?=base_url()?>c_bhp/updatestokbhp">
           <input type="hidden" name="id_bhp" value="<?=$p->id_bhp?>">
           <input type="number" name="jumlahPakai" placeholder="masukkan jumlah pakai" required>
           <input type="hidden" name="jumlahStok" value="<?=$p->jumlah_bhp?>">
           <button type="submit">PAKAI</button>
         </form>
			</td>
		</tr>
		<?php } ?>
              </table>
            </div>
          </div>
        </div>
</body>
</html>
<?php error_reporting(0); $notif; $this->load->view('main/footer2');?>