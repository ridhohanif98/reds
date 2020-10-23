<?php
  
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}


    $msg = "";
    // Get image name
    // Get text
    $pertanyaan = mysqli_real_escape_string($db, $_POST['pertanyaan']);
    $jawaban = mysqli_real_escape_string($db, $_POST['jawaban']);




    $sql = "INSERT INTO faq (pertanyaan, jawaban) VALUES ('$pertanyaan', '$jawaban')";
    // execute query
    mysqli_query($db, $sql);

    
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','menambah FAQ dengan pertanyaan -> $pertanyaan')";
    $query2 = $db->query($sql2);
    header('Location: faqsetting.php');
?>