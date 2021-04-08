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
    <title>Tambah data siswa</title>
</head>
<body>
    

    <p><?php include 'application/views/include/navbar.php'; ?><p>

<center><h4>Tambah data siswa</h1></center><br><br>
 <form class="container border" action="<?=base_url('main/addsiswa'); ?>" method="post">
        <br>
  <div class="row">
    <div class="col-4">
        <label> NISN Siswa </label><br>
        <input type="text" class="form-control" placeholder="nisn" name="nisn">
        <br>
    </div><div class="col-4">
        <label> nis </label><br>
        <input type="text" class="form-control" placeholder="nis" name="nis">
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col-4">
            <label> email </label>
        <input type="text" class="form-control" placeholder="email" name="email">
   
        </div>
            <div class="col-4">
                <label> nama</label>
                    <input type="text" class="form-control" placeholder="nama" name="nama" >
                
            </div>
        <div class="col-sm-3">
    <label> password </label>
        <input type="text" class="form-control" placeholder="password" name="password">
           
        </div>
    </div>
    <div class="row">
                <div class="col-sm-2">
            <label> id kelas</label>
        <input type="text" class="form-control " placeholder="id_kelas" name="idkelas">
    
        </div>
                <div class="col-sm-4">
            <label> alamat</label>
        <input type="text" class="form-control " placeholder="alamat" name="alamat">
    
</div>
                <div class="col-sm-2">
            <label> notelp</label>
        <input type="text" class="form-control "placeholder="notelp"  name="notelp">
    
</div>
        <div class="col-2"></label>
            <label> id_spp
        <input type="text" class="form-control " placeholder="id_spp" name="idspp">
    
</div>
</div><br>
<button type="submit" class="btn btn-secondary">Submit</button>
<p>
</div>
</form>
</body>
</html>