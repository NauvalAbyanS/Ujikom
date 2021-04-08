
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/login.css">
  <title>WEB SPP Login</title>
</head>
<body>

<form class="user form" method="POST" action="<?=base_url('main/auth'); ?>">
  <center> <h2> LOGIN PETUGAS</h2></center>
    <div class="left">
      <label> email </label>
    <input type="text"  class="inp" id="email" name="email" placeholder="email" >  
    <p></p>
  <label> Password </label>
<input type="password"  class="inp" id="password" name="password" placeholder="password"> 
  <p> <center><button type="submit">Login</center></button></p>
    <p><a href="<?=base_url('main/loginsiswaform'); ?>">Login Siswa!!! </a></p>
      </div>

</body>
</html>
