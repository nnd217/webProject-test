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
			</ul>					
		</nav>

		<div class="article text-tengah">
			<h2 style="margin-top: 30px; margin-bottom: 30px;">Daftar Lagu</h2><br>
		<table border="0" width="100%" class="list">
        <tr>
        </tr>
        <?php 
        include 'admin/mysql.php';
        $path = 'admin/img/';
        $no = 1;
        $data = mysqli_query($mysqli,"select * from data");
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
	</html>