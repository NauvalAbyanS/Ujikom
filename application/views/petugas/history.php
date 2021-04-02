<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'application/views/include/navbar.php'; ?>
    <center><h1>History Pembayaran (Admin & Petugas)</h1></center>
    <form action="<?php echo base_url(). 'user/create'; ?>" method="post">
    <table class="table table-bordered container" >
  <thead>
    <tr>
      <th scope="col" name="idpembayaran">id pembayaran</th>
      <th scope="col" name="idpetugas">id petugas</th>
      <th scope="col" name="nisn">nisn</th>
      <th scope="col" name="tglbayar">tanggal Bayar</th>
      <th scope="col" name="bulanbayar">bulan bayar</th>
      <th scope="col" name="tahunbayar">tahun bayar</th>
      <th scope="col" name="idspp">id_spp</th>
      <th scope="col" name="jumlahbayar">jumlah bayar</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">coba</th>
      <td>coba</td>
      <td>coba</td>
      <td>coba</td>
      <td>masih mencoba</td>
      <td>masih mencoba</td>
      <td>masih mencoba</td>
      <td>masih mencoba</td>
    </tr>
    </tbody>
</form>
</table>
</body>
</html>