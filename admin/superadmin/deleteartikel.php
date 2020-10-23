<?php
    include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
    $id=$_GET['id'];
	$sql = "DELETE FROM artikel WHERE id_artikel=$id";  
	if(mysqli_query($db, $sql))  
	{  
		echo 'Data Deleted';  
    }
    header('Location: daftarartikel.php'); 
 ?>