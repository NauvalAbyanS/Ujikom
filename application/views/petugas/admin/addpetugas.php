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
    <title>Tambah data Petugas</title>
</head>
<body>
    <p><?php include 'application/views/include/navbar.php'; ?><p>
<center><h4>Tambah data Petugas</h1></center><br><br>

<form class="container border" action="<?=base_url('main/addpetugas'); ?>" method="post">
<div class="row">
        <div class="col">
        <br><br> 
  <div class="row">
    <div class="col">
        <label> level </label><br>
        <select name="level">
        <option value="1" >1</option>
        <option value="2" >2</option>
    </select><br>
    </div><div class="col-10">
        <label> id_petugas </label><br>
        <input type="text" class="form-control" placeholder="id petugas"name="idpetugas">
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col">
            <label> email
        <input type="text" class="form-control" placeholder="email" name="email">
    </label>
        </div>
            <div class="col">
                <label> password
                    <input type="text" class="form-control" placeholder="password "name="password" >
                </label>
            </div>
        <div class="col-8">
    <label> nama petugas
        <input type="text" class="form-control" placeholder="nama petugas"name="namapetugas">
            </label>
        </div>
    </div>
    
</div>
</div>
<br>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>

</div>
</form>
</body>
</html>