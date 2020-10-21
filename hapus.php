<?php 
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conection,"DELETE FROM mahasiswa WHERE id='$id' ");
if($query){
    echo "<script> alert('Data Berhasil dihapus dari DB !');</script>";
	echo "<script> location='index.php'; </script>";
}else{
    echo "Mahasiswa dengan Id ".$id."Gagal dihapus !";
}