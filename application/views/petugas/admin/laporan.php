<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" type="text/css" href="style.css" />
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'application/views/include/navbar.php'; ?>
    <center><h1>Data Laporan SPP </h1></center>
    <br>
    <form action="<?php echo base_url(). 'main/laporan'; ?>" method="post">  
    <center>
      <label>Pilih Tahun :</label>
      <select class="form-select" name="tahun">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
      </select>
    <input type="submit" value="submit"></input>


    </center><br>
    <table class="table table-bordered container" >
  <thead class ="table table-dark">
    <tr>
      <th scope="col" >no</th>
      <th scope="col" >nisn</th>
      <th scope="col" >nama</th>
      <th scope="col" >tanggal bayar</th>
      <th scope="col" >bulan bayar</th>
      <th scope="col" >tahun bayar</th>
      <th scope="col" >jumlah bayar</th>
      <th scope="col" >status</th>
      
    </tr>
  </thead>
  <?php
  $pemb = $this->db->get('pembayaran');
  $i=0;
    foreach($pemb->result() as $lapor){
      $i++;
      $query = $this->db->get_where('siswa', array('nisn' => $lapor->nisn));
      
      //////////// Status SPP (Lunas / Belum lunas) ////////////
      if($lapor->jumlah_bayar >= 200000){
        $status ="Lunas";
    }elseif($lapor->jumlah_bayar < 200000){
        $status ="Belum Lunas";
      }
      
        foreach($query->result() as $sis){
        ?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $lapor->nisn;?></td>
        <td><?php echo $sis->nama;?></td>
        <td><?php echo $lapor->tanggal_bayar;?></td>
        <td><?php echo $lapor->bulan_bayar;?></td>
        <td><?php echo $lapor->tahun_bayar;?></td>
        <td><?php echo $lapor->jumlah_bayar;?></td>
        <td><?php echo $status?></td>
  <?php }}?>
      </tr>
    </tbody>
</form>
</table>



</body>
</html>