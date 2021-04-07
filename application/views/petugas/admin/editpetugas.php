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
    <div class="col">
        <label> level </label><br>
        <select name="level">
        <option value="1" <?php echo ($petugas->level ? '1' : 'selected' ); ?>>1</option>
        <option value="2" <?php echo ($petugas->level ? '2' : 'selected' ); ?>>2</option>
    </select><br>
    </div><div class="col-10">
        <label> id_petugas </label><br>
        <input type="text" class="form-control" value="<?php echo $petugas->id_petugas; ?>" name="id_petugas">
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col">
            <label> email
        <input type="text" class="form-control" value="<?php echo $petugas->email; ?>" name="email">
    </label>
        </div>
            <div class="col">
                <label> password
                    <input type="text" class="form-control" value="<?php echo $petugas->password; ?>" name="password" >
                </label>
            </div>
        <div class="col-8">
    <label> nama petugas
        <input type="text" class="form-control" value="<?php echo $petugas->nama_petugas; ?>" name="nama_petugas">
            </label>
        </div>
    </div>
    
</div>
</div>
<button type="submit" class="btn btn-secondary">Submit</button>

</div>
</form>
</body>
</html>