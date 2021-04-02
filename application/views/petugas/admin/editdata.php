<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'application/views/include/navbar.php'; ?>
    <center><h1>Pilih Data yang akan anda Edit</h1></center>

<form action="<?=base_url('main/linkCRUD'); ?>" method="post">
    <button type="submit" class="button1" value="siswa" name="button"> Data siswa</button>
    <button type="submit" class="button2" value="petugas" name="button"> Data petugas</button>
    <button type="submit" class="button3" value="kelas" name="button"> Data kelas</button>
    <button type="submit" class="button4" value="spp" name="button"> Data spp</button>
</form>
</body>
</html>