<?php 
        include 'admin/mysql.php';?>
       <html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="dweb.css">
		
		<<title>Nnd_217</title>

		<style type="text/css">
			.html, body {
				width: 100%;
				height: 100%;
			}

			.footer {
				flex-shrink: 0;
				width: 100%;
			}

		</style>
		
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

		<div class="article text-tengah" >
			<div style="margin-top: 40px;">
<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<h3>Hasil pencarian : ".$cari."</h3>";
	}
?>
</div>
<table border="0" width="100%" class="list" style="padding-top: 20px;">
        <tr>
        </tr>
        <?php 
        include 'admin/mysql.php';
        $path = 'admin/img/'; 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($mysqli,"select * from data where name like '%".$cari."%'");    
 }else{
  $data = mysqli_query($mysqli,"select * from data");  
 }
 $no = 1;
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td width='7%'><a href="post.php?id=<?php echo $d['id'];?>"><?php echo "<img src='" . $path . $d['img'] . "'>"; ?></a><br></td>
                <td align='top-left'>&nbsp;&nbsp;<a href="post.php?id=<?php echo $d['id'];?>"><?php echo $d['name']; ?></a></td>
            </tr>
            <?php 
        }
        ?>
    </table>
		</div>

	
	</body>
	<footer>
		<div class="text-footer">made with luv &hearts;.</div>
	</footer>
</div>
</div>

	</html>