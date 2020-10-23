<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    // Get text
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $id = $_POST['idabout'];

    // execute query
    $update= mysqli_query($db, "UPDATE about SET judul='$judul', isi='$isi' WHERE idabout='$id'");

            if($update){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('About berhasil di ubah');document.location='aboutsetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='aboutsetting.php'</script>";
             }

?>