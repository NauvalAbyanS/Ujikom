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
<?php include 'application/views/include/navbarsiswa.php'; ?>
    <center><h1>History Pembayaran (Siswa)</h1></center>
    <form>
    <br><p>
    <table class="table table-bordered container" >
  <thead class ="table table-dark">
    <tr>
      <th scope="col" name="idpembayaran">nisn</th>
      <th scope="col" name="idpetugas">nama</th>
      <th scope="col" name="nisn">id_spp</th>
      <th scope="col" name="tglbayar">tanggal Bayar</th>
      <th scope="col" name="bulanbayar">bulan bayar</th>
      <th scope="col" name="tahunbayar">tahun bayar</th>
      <th scope="col" name="idspp">id_spp</th>
      <th scope="col" name="jumlahbayar">jumlah bayar</th>
    </tr>
  </thead>
  <?php
  $pemb = $this->db->get('pembayaran');
    foreach($pemb->result() as $lapor){
        if($lapor->jumlah_bayar >= 200000){
            $status ="lunas";
        }elseif($lapor->jumlah_bayar < 200000){
            $status ="belum lunas";
        }
        $siswa = $this->db->get_where('siswa', array('nisn' => $this->session->userdata('nisn')));
        foreach($siswa->result() as $sis){
            $nisnn = $this->session->userdata('nisn');
            if($lapor->nisn == $sis->nisn){
                return $nisnn; 
            }
        ?>
      <tr>
        <td><?php echo $nisnn;?></td>
        <td><?php echo $sis->nama;?></td>
        <td><?php echo $lapor->id_spp;?></td>
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