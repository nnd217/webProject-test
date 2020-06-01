<html>
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

		<?php 

		include 'admin/mysql.php';
        $path = 'admin/img/';
        $data = mysqli_query($mysqli,"SELECT * FROM data WHERE id = '".$_GET['id']."'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <div class="j" style="padding:20px; text-align: justify;">
            	<h2><?php echo $d['name'];?></h2>
            	
            	<p><?php echo "<img class='gmbr' src='" . $path . $d['img'] . "'>"; ?>

            	<div class="lirik">

<?php
 
// membaca input dari form
$input =  $d['isi'];
 
// memecah string input berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $input);

// string kosong inisialisasi
$post = "";
 
// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $tex
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i] ,$pecah[$i]);
   $post .= $part;
}

$pecah1 = explode("\r\n", $post);

// string kosong inisialisasi
$text = "";
 
// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $tex
for ($i=0; $i<=count($pecah1)-1; $i++)
{
   $part1 = str_replace($pecah1[$i], $pecah1[$i]."<br>", $pecah1[$i]);
   $text .= $part1;
}
  
?>
           	<?php echo $text; ?>
            </div>

            </div>
            
            <?php } ?>
	
	</body>
			<footer>
				<div class="text-footer">made with luv &hearts;.</div>
			</footer>
			
</html>