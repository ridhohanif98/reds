<?php
      session_start();
     session_destroy();
   require_once("config.php");
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='tambahadmin.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO admin VALUES (NULL, '$username', '$password', '$email')";
       $simpan = $db->query($data);
       if($simpan) {
        $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','Menambah admin')";
        $query2 = $db->query($sql2);
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>