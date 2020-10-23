<?php  
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

$iduser = $_GET['idadmin'];
$query = "DELETE FROM admin
WHERE idadmin =  '$iduser'"; 
mysqli_query($db, $query);

    if($query){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Admin berhasil dihapus dari database');document.location='daftaruser.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses hapus gagal, coba kembali');document.location='daftaruser.php'</script>";
    }

$sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','$username menghapus iduser -> $iduser')";
    $query2 = $db->query($sql2);

die();  
?>