<?php
    include 'config.php';
	session_start();
	if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
	} else { 
   $username = $_SESSION['username']; 
	}
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];


    mysqli_query($db,"UPDATE user SET email='$email', password='$password', nama='$nama', username='$username', alamat='$alamat', notelp='$notelp' where username='$username'");
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('user','$username','$username telah memperbarui profil')";
    $query2 = $db->query($sql2);
    header('Location: profil.php');
?>