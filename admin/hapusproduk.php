<?php
//panggil file koneksi.php yang sudah anda buat
include "config.php";

$idproduk=$_GET['idproduk'];   //ambil parameter GET id  dan buat variabel

//ambil data dari tabel


//hapus gambar dari folder images


//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($db, "DELETE FROM produk where idproduk='$idproduk'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='admin.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='admin.php'</script>";
}
?>