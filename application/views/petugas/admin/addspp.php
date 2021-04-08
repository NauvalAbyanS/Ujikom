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
<center><h4>Tambah data SPP</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/addspp'); ?>" method="post">
        <br><br> 
            <div class="row">
                <div class="col">
            <label> id spp</label>
        <input type="text" class="form-control" placeholder="id_spp" name="idspp">
        </div>
            <div class="col">
                <label> Tahun</label>
                    <input type="text" class="form-control" placeholder="tahun" name="tahun" >
                </div>
            <div class="col-4">
         <label> Nominal</label>
    <input type="text" class="form-control" placeholder="nominal" name="nominal">
        </div>
</div>
<br>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>

</div>
</form>
</body>
</html>