<?php 
 

include 'mysql.php';
$id = $_POST['id'];
$judul = $_POST['name'];
$isi = $_POST['isi'];
$tahun = $_POST['tahun'];
$sql = "UPDATE data SET name='$judul', isi='$isi', tahun='$tahun' WHERE id='$id'";
 
$a = mysqli_query($mysqli,$sql);
header("location:daftar.php");
?>