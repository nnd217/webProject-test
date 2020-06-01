<!DOCTYPE html>
<html>
 <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<script>alert('Password atau username salah')</script>";
        }else if($_GET['pesan'] == "logout"){
            echo "<script>alert('Sampai jumpa')</script>";
        }else if($_GET['pesan'] == "belum_login"){
            echo "<script>alert('Silahkan login terlebih dahulu')</script>";
        }
    }
    ?>
<head>
	<title>Nnd_217</title>
	<link rel="stylesheet" type="text/css" href="tlogin.css">

</head>
<body>

	<div class="login-box">
		<p class="a">Login Admin</p>

		<form method="post" action="admin/cek.php">
			<label>Username :</label>
			<input type="text" name="username" class="form" placeholder="Username">

			<label>Password :</label>
			<input type="text" name="password" class="form" placeholder="Password">

			<input type="submit" class="submit" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>


</body>
</html>