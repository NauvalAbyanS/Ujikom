<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/transaksi.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit data</title>
</head>
<body>
    

    <p><?php include 'application/views/include/navbar.php'; ?><p>

<center><h4>Edit data kelas</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/updatekelas'); ?>" method="post">
    <div class="row">
        <div class="col">
        <br><br> 
  <div class="row">
    <div class="col">
        <label> id kelas </label><br>
        <input type="text" class="form-control" value="<?php echo $kelas->id_kelas; ?>" name="id">
    </select><br>
    </div><div class="col">
        <label> nama kelas </label><br>
        <input type="text" class="form-control" value="<?php echo $kelas->nama_kelas; ?>" name="namakelas">
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col-6">
            <label> kompetensi dan Keahlian  </label>
        <input type="text" class="form-control" value="<?php echo $kelas->kompetensi_keahlian; ?>" name="kompetensi">
        <br>
        </div>
    </div>
<button type="submit" class="btn btn-secondary">Submit</button>
</div>

</form>
</body>
</html>