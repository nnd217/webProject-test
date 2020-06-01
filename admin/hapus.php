<?php 
 

include 'mysql.php';
$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id='$id'";
 
$a = mysqli_query($mysqli,$sql);
header("location:daftar.php");
?>