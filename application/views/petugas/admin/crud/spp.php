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
    <center><h1>Data SPP</h1></center>
    <br><br>
    <button type="button" class="btn btn-success add">  <a href="<?php echo site_url('Main/addsppform') ?>" class="add2">Tambah data SPP</a> </button>
    <br><p>
    <form>
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