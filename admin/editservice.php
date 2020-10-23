<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $id = $_POST['idservice'];

    // execute query
    $update= mysqli_query($db, "UPDATE service SET judul='$judul', isi='$isi' WHERE idservice='$id'");

            if($update){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Service berhasil di ubah');document.location='servicesetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='servicesetting.php'</script>";
             }

?>