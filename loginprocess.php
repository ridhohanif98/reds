<?php
   session_start();
   require_once("config.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('user','$username','login')";
    $query2 = $db->query($sql2);
       $_SESSION['username'] = $hasil['username'];
       $_SESSION['role'] = 'user';
       header('location:dashboard.php');
     }
   }
?>