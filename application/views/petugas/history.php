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
    <form>
    <button type="button" class="btn btn-success add">  <a href="<?php echo site_url('Main/transaksi/') ?>" class="add2">Pembayaran</a> </button>
    <br><p>
    <table class="table table-bordered container" >
  <thead class ="table table-dark">
    <tr>
      <th scope="col" name="idpembayaran">no</th>
      <th scope="col" name="idpetugas">nama petugas</th>
      <th scope="col" name="nisn">nama siswa</th>
      <th scope="col" name="tglbayar">tanggal Bayar</th>
      <th scope="col" name="bulanbayar">bulan bayar</th>
      <th scope="col" name="tahunbayar">tahun bayar</th>
      <th scope="col" name="jumlahbayar">jumlah bayar</th>
    </tr>
  </thead>
  <?php
  $i=0;
    foreach($pembayaran as $row){
      $i++;
        ?>
      <tr>

        <td><?php echo $i;?></td>
        <td><?php echo $row['namapetugas']; ?></td>
        <td><?php echo $row['namasiswa'];?></td>
        <td><?php echo $row['tanggalbayar'];?></td>
        <td><?php echo $row['bulanbayar'];?></td>
        <td><?php echo $row['tahunbayar'];?></td>
        <td><?php echo $row['jumlahbayar'];?></td>
  <?php }?>
      </tr>
    </tbody>
</form>
</table>
</body>
</html>