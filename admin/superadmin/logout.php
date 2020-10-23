<?php

   session_start();
   require_once("config.php");
   if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','log out')";
    $query2 = $db->query($sql2);
   session_destroy();
?>

<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="/pkl/admin/index.php">disini</a> untuk login kembali
</div>