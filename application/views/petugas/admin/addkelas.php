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
    <title>Transaksi pembayaran</title>
</head>
<body>
    <p><?php include 'application/views/include/navbar.php'; ?><p>
<center><h4>Tambah data Kelas</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/addkelas'); ?>" method="post">
        <br><br> 
            <div class="row">
                <div class="col">
            <label> id kelas</label>
        <input type="text" class="form-control" placeholder="id_kelas" name="idkelas">
        </div>
            <div class="col">
                <label> nama kelas</label>
                    <input type="text" class="form-control" placeholder="nama kelas" name="namakelas" >
                </div>
            <div class="col-4">
         <label> kompetensi keahlian</label>
    <input type="text" class="form-control" placeholder="kompetensi keahlian" name="keahlian">
    </div>
</div>
<br>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>

</div>
</form>
</body>
</html>