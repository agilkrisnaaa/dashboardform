<?php
$host="localhost";
$user="root";
$password="";
$db="update_employee";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>