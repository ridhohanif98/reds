<?php
//panggil file koneksi.php yang sudah anda buat
include "config.php";

$idtestimoni=$_GET['idtestimoni'];   //ambil parameter GET id  dan buat variabel

//ambil data dari tabel
$b=mysqli_fetch_array(mysqli_query($db, "SELECT * FROM testimoni where idtestimoni='$idtestimoni'"));

//hapus gambar dari folder images
unlink("image/$b[gambar]");

//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($db, "DELETE FROM testimoni where idtestimoni='$idtestimoni'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='testimonisetting.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='testimonisetting.php'</script>";
}
?>