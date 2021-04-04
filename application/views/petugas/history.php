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
  <thead class ="table table-dark">
    <tr>
      <th scope="col" name="idpembayaran">id pembayaran</th>
      <th scope="col" name="idpetugas">id petugas</th>
      <th scope="col" name="nisn">nisn</th>
      <th scope="col" name="tglbayar">tanggal Bayar</th>
      <th scope="col" name="bulanbayar">bulan bayar</th>
      <th scope="col" name="tahunbayar">tahun bayar</th>
      <th scope="col" name="idspp">id_spp</th>
      <th scope="col" name="jumlahbayar">jumlah bayar</th>
      <th scope="col" >option</th>
    </tr>
  </thead>
  <?php
        $db = mysqli_connect('localhost', 'root', '', 'db_spp');
        $sql = "SELECT * FROM pembayaran";
        $query = mysqli_query($db,$sql);

        while($bayar = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$bayar['id_pembayaran']."</td>";
            echo "<td>".$bayar['id_petugas']."</td>";
            echo "<td>".$bayar['nisn']."</td>";
            echo "<td>".$bayar['tanggal_bayar']."</td>";
            echo "<td>".$bayar['bulan_bayar']."</td>";
            echo "<td>".$bayar['tahun_bayar']."</td>";
            echo "<td>".$bayar['id_spp']."</td>";
            echo "<td>".$bayar['jumlah_bayar']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$bayar['nisn']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$bayar['nisn']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
</form>
</table>
</body>
</html>