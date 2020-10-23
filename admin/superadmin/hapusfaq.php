<?php  
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

$id = $_GET['idfaq'];
$query = "DELETE FROM faq
WHERE idfaq =  '$id'"; 
mysqli_query($db, $query); 
$sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','$username menghapus faq')";
    $query2 = $db->query($sql2);


header("Location: faqsetting.php");
die();  
?>