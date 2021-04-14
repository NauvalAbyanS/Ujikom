<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/buttonlaptop.css">

  <style>
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>halaman utama siswas</title>

</head>
<body>
<?php include 'application/views/include/navbarsiswa.php'; ?>
    <div class="centext"> 
    <h1><?php $data['siswa'] = $this->db->get_where('siswa',['email' => $this->session->userdata('email')])->row_array();
        echo 'selamat datang '. $data['siswa']['nama']  . ' Anda adalah Siswa!'?></h1>
      <h2> ingin melihat history pembayaranmu? </h2>
    </div>
    
    <form  >
    <button type="submit" class="button1" action="<?php base_url('main/historysiswa'); ?>"> History pembayaran</button>
    
</form>
</div>
</body>
</html>