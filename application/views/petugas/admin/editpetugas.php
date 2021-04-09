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

<center><h4>Edit data Petugas</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/updatepetugas'); ?>" method="post">
    <div class="row">
        <div class="col">
        <br><br> 
        <div class="row">
  <div class="col-3">
        <label> id Petugas</label>
                    <input type="text" class="form-control" value="<?php echo $petugas->id_petugas; ?>"name="idpetugas" >
            </div>
    <div class="col-1">
        <label> level </label><br>
        <input type="text" class="form-control" value="<?php echo $petugas->level; ?>" name="level"></input><br>
        </div>
    </div>
  
            <div class="row">
                <div class="col-3">
            <label>nama petugas </label>
        <input type="text" class="form-control" value="<?php echo $petugas->nama_petugas; ?>" name="namapetugas">
        </div>
            <div class="col-3">
                <label>email </label>
                    <input type="text" class="form-control" value="<?php echo $petugas->email; ?>" name="email" >

            </div>
        <div class="col-3">
    <label> password</label>
        <input type="text" class="form-control" value="<?php echo $petugas->password; ?>" name="password">
            
        </div>
    </div>
    
</div>
</div><br>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>

</div>
</form>
</body>
</html>