<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:http://localhost/pkl/admin/superadmin/'); }
   require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="kotak_login">
<div class="form-group">
<center><img src="image/4.png" width="50" height="50" alt=""><center>
<p class="tulisan_login">Log In</p>
  <form action="loginadmin.php" method="post">
  <label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password ..">
   </br>
			<input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN"><br/>
			
		</form>
</div>
</div>
</body>
</html>



