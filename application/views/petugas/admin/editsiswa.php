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
    <title>Edit data siswa</title>
</head>
<body>
    

    <p><?php include 'application/views/include/navbar.php'; ?><p>

<center><h4>Edit data siswa</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/updatesiswa'); ?>" method="post">
        <br>
  <div class="row">
    <div class="col-4">
        <label> NISN Siswa </label><br>
        <input type="text" class="form-control" value="<?php echo $siswa->nisn; ?>" name="nisn">
        <br>
    </div><div class="col-4">
        <label> nis </label><br>
        <input type="text" class="form-control" value="<?php echo $siswa->nis; ?>" name="nis">
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col">
            <label> email
        <input type="text" class="form-control" value="<?php echo $siswa->email; ?>" name="email">
    </label>
        </div>
            <div class="col">
                <label> nama
                    <input type="text" class="form-control" value="<?php echo $siswa->nama; ?>" name="nama" >
                </label>
            </div>
        <div class="col-8">
    <label> password
        <input type="text" class="form-control" value="<?php echo $siswa->password; ?>" name="password">
            </label>
        </div>
    </div>
    <div class="row">
                <div class="col-sm-1">
            <p> id kelas
        <input type="text" class="form-control " value="<?php echo $siswa->id_kelas; ?>" name="idkelas">
    </p>
        </div>
                <div class="col-sm-4">
            <p> alamat
        <input type="text" class="form-control " value="<?php echo $siswa->alamat; ?>" name="alamat">
    </p>
</div>
                <div class="col-sm-4">
            <p> notelp
        <input type="text" class="form-control " value="<?php echo $siswa->notelp; ?>" name="notelp">
    </p>
</div>
        <div class="col-1">
            <p> id_spp
        <input type="text" class="form-control " value="<?php echo $siswa->id_spp; ?>" name="idspp">
    </p>
</div>
</div>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>
</div>
</form>
</body>
</html>