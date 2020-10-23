<?php
    include 'config.php';
	session_start();
    if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
    } else { 
   
    }
    $idadmin = $_POST['idadmin']; 
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];


    mysqli_query($db,"UPDATE admin SET username='$username', password='$password', email='$email' where idadmin='$idadmin'");


    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('user','$username','$username telah memperbarui profil')";
    $query2 = $db->query($sql2);
    header('Location: daftaruser.php');
?>