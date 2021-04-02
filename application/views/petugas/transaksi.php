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
<center><h4>Pembayaran SPP Siswa</h1></center><br><br>
 <form class="container border" action="<?php base_url('main/tambah'); ?>" method="post">
    <div class="row">
        <div class="col">
                    <input type="hidden" class="form-control" name="id_petugas" value="<?php $data['petugas'] = $this->db->get_where('petugas',['id_petugas' => $this->session->userdata('id_petugas')])->row_array();
                                                                                echo "" .$data['petugas']['id_petugas'];?>" >
                    <input type="hidden" class="form-control" name="id_pembayaran" value="">
            </div>
        </div>
        <br><br> 
  <div class="row">
    <div class="col">
        <label> NISN Siswa </label><br>
        <select name="nisn" >
        <option value="000123">000123</option>
        <option value="000456">000456</option>
    </select><br>
    </div><div class="col-10">
        <label> id_spp </label><br>
        <select name="idspp">
            <option value="11">11</option>
            <option value="12">12</option>
    </select><br>
    </div>
        </div>
            <div class="row">
                <div class="col">
            <label> Tanggal
        <input type="text" class="form-control" placeholder="tanggal" name="tanggal">
    </label>
        </div>
            <div class="col">
                <label> Bulan
                    <input type="text" class="form-control" placeholder="bulan" name="bulan" >
                </label>
            </div>
        <div class="col-8">
    <label> Tahun
        <input type="text" class="form-control" placeholder="tahun" name="tahun">
            </label>
        </div>
    </div>
    <div class="row">
                <div class="col-sm-4">
            <p> Jumlah Bayar
        <input type="text" class="form-control " placeholder="Jumlah bayar" name="jumbay">
    </p>
</div>

</div>
<button type="button" class="btn btn-secondary">Submit</button>

</div>
</form>
</body>
</html>