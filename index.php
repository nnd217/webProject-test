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
		 
		<link rel="stylesheet" type="text/css" href="dweb.css">
		
		<title>Nnd_217</title>
		
			  </head>
	<body>
		<nav id="menu">
			<ul>
				<div id="judul">
					<a>NdLyrics</a>
				</div> 
						<li><a href='index.php'>HOME</a></li>
						<li><a href='about.php'>ABOUT</a></li>
						<li><a href='list.php'>LIST</a></li>
						<li><a href='login.php '>ADMIN</a></li>
			</ul>			
		</nav>
		<div class="h1">
			<h1>Welcome to NdLyrics </h1>
		</div>
		
		<div class="article">
			<div align="center"><form class="form-tengah" action="cari.php" method="get">
				<input class="search" name="cari" type="text" placeholder="Judul Lagu..." required>	
				<input class="button" type="submit" value="Cari">		
		</form></div></div>
		
	</body>

	<div class="footer">
		<div class="h2">
			<h2>Top Songs :</h2>
		</div>
	<div class="row">	
		<div class="column">
			<div class="column 2">
				<a href="mobilbalap.php"> <img src="066e17cb1087b2db34dfec586e4e78d7.500x500x1_kecil.jpg"> </a> <br>
				Mobil Balap - Naif
			</div>
			<div class="column 3">
				<a href="tendabiru.php"> <img src="desy_kecil.jpg"> </a> <br>
				Tenda Biru - Desy Ratnasari 
			</div>
			<div class="column 4">
				<a href="mungkinkah.php"> <img src="stinky_kecil.jpg"> </a> <br>
				Mungkinkah - Stinky
			</div>
			<div class="column 5">
				<a href="kekasihgelapku.php"> <img src="ungu-band_20161106_234046_kecil.jpg"> </a> <br>
				Kekasih Gelapku - Ungu
			</div>
			<div class="column 6">
				<a href="dan.php"> <img src="sheilla.png"> </a> <br>
				Dan - Sheilla On 7
			</div>
		</div>
	</div>	
	</body>
			<footer>
				<div class="text-footer">made with luv &hearts;.</div>
			</footer>
	</html>