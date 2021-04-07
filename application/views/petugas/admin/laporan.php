<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'application/views/include/navbar.php'; ?>
    <center><h1>Laporan SPP per-tahun</h1></center>
    <form action="<?php echo base_url(). 'user/create'; ?>" method="post">
    <table class="table table-bordered container" >
  <thead class ="table table-dark">
    <tr>
      <th scope="col" name="idspp">id spp</th>
      <th scope="col" name="tahun">tahun</th>
      <th scope="col" name="nominal">nominal</th>
      <th scope="col" >option</th>
    </tr>
  </thead>
  <?php
  $query = $this->db->get('spp');
    foreach($query->result() as $row){
        ?>
      <tr>

        <td><?php echo $row->id_spp;?></td>
        <td><?php echo $row->tahun;?></td>
        <td><?php echo $row->nominal;?></td>
        <td>
      <a href="<?php echo site_url('Main/editspp/'.$row->id_spp) ?>">Edit</a> ||
      <a href="<?php echo site_url('Main/deletespp/'.$row->id_spp) ?>">Delete</a>
  <?php }?>
      </tr>
    </tbody>
</form>
</table>



</body>
</html>