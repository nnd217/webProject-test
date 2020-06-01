<!DOCTYPE html>
<html>

	<head>
	<style>
body {
        background-color:#07b39f;
        height: 90%;
    }
.h {
	text-align: left;
	padding-left:350px;
	color: white;
	font-size: 20;
}
a {
	color : white;
}
.ind {
	color: white;
	padding-top: 5px;
	font-size: 14;
	padding-left: 350px;
	padding-bottom: 15px;
	}
	
	</style>
		<title>Nnd_217</title>
	</head>
	
	<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
    }
    ?>
	
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="h">
    <h1>Input Lirik Lagu</h1>
	<h4><a href="daftar.php">Daftar Lirik Lagu</a></h4>

	</div>
    
        <br>
		<div class="ind">
		Judul - Penyanyi
        <br>
		<br>
            <input type="text" style="width: 600px; height: 30px; color:#336699;" name="judul" placeholder="Judul & Penyanyi . . .">
        </div>
		<div class="ind">
        Lirik Lagu
        <br>
		<br>
            <textarea name="isi" cols="73px" rows="10" style="color:#336699;" placeholder="Input lirik lagu . . ."></textarea>
        </div>
		<div class="ind">
         Tahun
        <p>
            <input type="text"  style="width: 600px; height: 30px; color:#336699;" name="tahun" placeholder="Tahun rilis lagu . . .">
        </p>
        Cover 
		<br>
        <p>
            <input type="file" name="image" style="color: white">
        </p>
		<br>
        <p>
            <input type="submit" value="Simpan">
        </p>
		</div>
    </form>
	<div class="ind">

    <a href="logout.php">LOGOUT</a>
	</div>
</body>

</html>