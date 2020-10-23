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

            if($update){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('FAQ berhasil diubah');document.location='faqsetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='faqsetting.php'</script>";
             }
?>