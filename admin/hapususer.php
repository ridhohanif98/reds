<?php  
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

$iduser = $_GET['id'];
$query = "DELETE FROM user
WHERE id =  '$iduser'"; 
mysqli_query($db, $query); 
$sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','$username menghapus iduser -> $iduser')";
    $query2 = $db->query($sql2);


header("Location: daftaruser.php");
die();  
?>