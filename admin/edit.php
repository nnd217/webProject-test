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
	<div class="h">	
	<h1>Edit Lirik Lagu</h1> <br/>
	<h4><a href="daftar.php">Daftar Lirik Lagu</a></h4>
	</div>
	
	<?php 
	if (isset($_GET['id'])){
	$id = $_GET['id'];
	}else{
		die('Data tidak tersedia');
	}

    $no=1;
    include 'mysql.php';
	$path = 'img/';
	$id = $_GET['id'];
    $data = mysqli_query($mysqli,"select * from data where id='$id'");
    while($d = mysqli_fetch_array($data)){
            ?>
	<form action="update.php" method="post" enctype="multipart/form-data">		
		<div class="ind">
		Judul - Penyanyi
        <br>
		<br>
			<input type="hidden" style="width: 600px; height: 30px; color:#336699;" name="id" value="<?php echo $d['id'] ?>">
            <input type="text" style="width: 600px; height: 30px; color:#336699;" name="name" value="<?php echo $d['name'] ?>">
		</div>
		<div class="ind">
         Tahun
        <p>
            <input type="text"  style="width: 600px; height: 30px; color:#336699;" name="tahun" value="<?php echo $d['tahun'] ?>">
        </p>
		</div>
		<div class="ind">
        Lirik Lagu
        <br>
		<br>
            <textarea name="isi" cols="73px" rows="10" style="color:#336699;"><?php echo $d['isi'] ?></textarea>
		</br>
        <p>
            <input type="submit" value="Simpan">
        </p>
        </div>
        <p>
            <input type="submit" value="Simpan">
        </p>
        </div>
	</form>
	<?php } ?>
	<div class="ind">

    <a href="logout.php">LOGOUT</a>
	</div>
</body>
</html>