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
    <p><?php include 'application/views/include/navbar.php'; ?></p>
    <center><h1>Pembayaran SPP Siswa</h1></center>
 <form class="container transaksi">
  <div class="row">
    <div class="col">
        <label> NISN Siswa
            <input type="text" class="form-control" placeholder="NISN">
        </label>
    </div>
        <div class="col-10">
            <label> Kelas
                <input type="text" class="form-control" placeholder="Kelas">
            </label>
        </div>
        </div>
            <div class="row">
                <div class="col">
            <label> Tanggal
        <input type="text" class="form-control" placeholder="tanggal">
    </label>
        </div>
            <div class="col">
                <label> Bulan
                    <input type="text" class="form-control" placeholder="bulan">
                </label>
            </div>
        <div class="col-8">
    <label> Tahun
        <input type="text" class="form-control" placeholder="tahun">
            </label>
        </div>
    </div>
    <div class="row">
                <div class="col-sm-4">
            <p> Jumlah Bayar
        <input type="text" class="form-control " placeholder="Jumlah bayar">
    </p>
</div>

</div>
<button type="button" class="btn btn-secondary">Submit</button>
</form>
</div>
</body>
</html>