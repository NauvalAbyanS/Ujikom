<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/button.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Halaman utama admin</title>

</head>
<body>
  <?php include 'application/views/include/navbar.php'; ?>
    <div class="centext"> 
      <h1><?php $data['petugas'] = $this->db->get_where('petugas',['email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang '. $data['petugas']['nama_petugas']  . ' Anda adalah admin!!';?></h1>
      <h3> Apa yang ingin anda lakukan </h3>
    </div>
<form action="<?=base_url('main/linkCRUD'); ?>" method="post">
    <button type="submit" class="button1" value="transaksi" name="button"> Transaksi pembayaran</button>
    <button type="submit" class="button2" value="history" name="button"> History pembayaran</button>
    <button type="submit" class="button3" value="editdata" name="button"> Edit Data</button>
    <button type="submit" class="button4" value="laporan" name="button"> Laporan</button>
</form>
</body>
</html>