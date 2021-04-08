<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/login.css">
  <title>WEB SPP Login</title>
</head>
<body>

<form class="user form"  action="<?=base_url('main/loginsiswa'); ?>" method="post">
  <center> <h2> LOGIN SISWA</h2></center>
    <div class="left">
      <label> email </label>
    <input type="text"  class="inp" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
    <p></p>
  <label> Password </label>
<input type="password"  class="inp"  name="password" placeholder="password" value="<?php echo set_value('password'); ?>"> 
  <p> <center><input type="submit" value="login"></center></input></p>
      </div>
</form>
</body>
</html>