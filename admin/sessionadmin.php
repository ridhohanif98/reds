<?php
require_once("config.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username1 = $_SESSION['username']; 
}
if($username1 == "admin"){
  header('location:http://localhost/pkl/admin/superadmin/');
}
?>