<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    // Get text
    $pertanyaan = mysqli_real_escape_string($db, $_POST['pertanyaan']);
    $jawaban = mysqli_real_escape_string($db, $_POST['jawaban']);
    $id = $_POST['idfaq'];

    // execute query
    $update= mysqli_query($db, "UPDATE faq SET pertanyaan='$pertanyaan', jawaban='$jawaban' WHERE idfaq='$id'");

    header('Location: faqsetting.php');
?>