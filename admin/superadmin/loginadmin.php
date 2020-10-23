<?php
   session_start();
   require_once("config.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   
    if ($username == "admin" AND $pass == "admin") {
   $sql2 = "SELECT * FROM admin WHERE username = '$username'";
   $query2 = $db->query($sql2);
   $hasil2 = $query2->fetch_assoc();
    $_SESSION['username'] = $hasil2['username'];
    header('location:admin.php');
   } else{

   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='index.php?page=login'>coba lagi</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='index.php?page=login'>coba lagi</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:berhasil.php');
     }
   }
   }


?>