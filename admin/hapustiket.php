<?php  
include 'config.php';
require_once("sessionadmin.php");

$idtiket = $_GET['idtiket'];
$query = "DELETE FROM tiket
WHERE idtiket =  '$idtiket'"; 
mysqli_query($db, $query); 
$sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','$username menghapus tiket -> $idtiket')";
    $query2 = $db->query($sql2);

            if($query2){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Tiket berhasil dihapus');document.location='admin.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses hapus gagal, coba kembali');document.location='admin.php'</script>";
             }

die();  
?>