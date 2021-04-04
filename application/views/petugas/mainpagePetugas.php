<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/buttonpc.css">

  <style>
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>halaman utama petugas </title>

</head>
<body>
<?php include 'application/views/include/navbar.php'; ?>
    <div class="centext"> 
        <h1><?php $data['petugas'] = $this->db->get_where('petugas',['email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang '. $data['petugas']['nama_petugas']  . ' Anda adalah petugas!'; ?></h1>
      <h3> Apa yang ingin anda lakukan </h3>
    </div>

<form action="<?=base_url('main/link'); ?>" method="post">
    <button type="submit" class="button1" value="transaksi" name="button"> Transaksi pembayaran</button>
    <button type="submit" class="button2" value="history" name="button"> History pembayaran</button>
</form>
</body>
</html>