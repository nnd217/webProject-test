<!DOCTYPE html>
<html>
<head>
    <style>
    body {
        background-color:#07b39f;
        height: 90%;
    }
    .dtable {
        width: 600px;
        margin: 30px auto;
        border: 2px solid;
        padding: 30px;
        font-family:'Nunito',sans-serif;
        font-size:14px;
		color : #336699;
        background-color:white;
}

a {
    text-decoration: none;
    color: #336699;
    border-bottom: 1px solid;
    border-width: 100%;
}

a:hover {
    color: #336699;
}

table {
    border-collapse: collapse;
}
table,th, td{
    text-align: center;
    border: 0.5px solid black;
}

th, td {
    padding: 10px;
	color : #336699;
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
    <div class="dtable">
 
    <h2>Data lirik lagu yang telah diupload</h2>
    <a style="border-bottom: none;" href="index.php">+ Buat post!</a>
    <br/>
    <br/>
    <table border="0.5">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Cover</th>
            <th>Tahun</th>
            <th>Edit/Hapus</th>
        </tr>
        <?php 
        $no=1;
        include 'mysql.php';
        $path = 'img/';
        $data = mysqli_query($mysqli,"select * from data");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo "<img src='" . $path . $d['img'] . "' width='60px' height='60px'><br>"; ?></td>
                <td><?php echo $d['tahun']; ?></td>
                <td><a href="../post.php?id=<?php echo $d['id'];?>">LIHAT</a><br>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a><br>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                   
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
	<br/>
	<a href="logout.php">LOGOUT</a>
</div>

</body>
</html>