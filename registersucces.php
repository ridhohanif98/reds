<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="main.js"></script>
    
</head>
<body>
<div class="kotak_login">
<div class="form-group">
<center><img src="image/4.png" width="50" height="50" alt=""><center>
<p class="tulisan_login">Pendaftaran akun berhasil</p>
  <script>
			$(document).ready(function(){
				window.setInterval(function () {
					var sisawaktu = $("#waktu").html();
					sisawaktu = eval(sisawaktu);
					if (sisawaktu == 0) {
						location.href = "dashboard.html";
					} else {
						$("#waktu").html(sisawaktu - 1);
					}
				}, 1000);
			});
		</script>
		</form>
</div>
</div>
</body>
</html>



