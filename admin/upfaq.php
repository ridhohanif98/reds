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

            if($sql){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('FAQ berhasil ditambahkan ke database');document.location='faqsetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses gagal, coba kembali');document.location='faqsetting.php'</script>";
             }
    
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','menambah FAQ dengan pertanyaan -> $pertanyaan')";
    $query2 = $db->query($sql2);
?>