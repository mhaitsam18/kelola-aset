<?php $this->load->view('main/header2');?> 
<!DOCTYPE html>
<html>
<head>
  <title>Report Pemakaian BHP</title>
</head>
<body>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pemakaian BHP</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <!-- <center>
          <button><a href="<?php //echo base_url()?>inputbhp">TAMBAH</a></button>
                </center> -->
                <br>
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama BHP</th>
                    <th>Kategori BHP</th>
                    <th>Satuan BHP</th>
                    <th>Jumlah BHP</th>
                    <th>Tanggal Pakai</th>
                    <th>Action</th>
                  </tr>
                </thead>
        <?php 
        $no = 1;
        foreach($data2 as $b){ 
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->nm_bhp ?></td>
        <td><?php echo $b->kategori_bhp  ?></td>
        <td><?php echo $b->satuan_bhp ?></td>
        <td><?php echo $b->jumlah_bhp ?></td>
        <td><?php echo $b->tanggal_pakai ?></td>
        <td>
          <button><a href="<?php echo base_url(); ?>c_bhp/cetak_bhp/<?php echo $p->id_bhp?>">Print</a></button>
        <!--  <button><a href="<?php //echo base_url()?>c_bhp/editbhpwhere/<?php //echo $p->id_bhp ?>">EDIT</a></button> -->
         <button><a href="<?php echo base_url()?>c_bhp/hapusbhp/<?php echo $p->id_bhp ?>">HAPUS</a></button>
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