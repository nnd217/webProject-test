<html>
<head><title>Nnd_217</title><style>
    .up {
        width: 600px;
        margin: 30px auto;
        border: 2px solid;
        padding: 30px;
        font-family:'Nunito',sans-serif;
        font-size:14px;
        background-color:white;
}

a {
    text-decoration: none;
    color: #336699;
}

</style>
</head>

<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
    }
    ?>
	
<body>
<script type="text/javascript" src="js/up.js"></script>
<div class="up">

<?php
include "mysql.php";

$nameFile = md5(date('ymd') . $_FILES['image']['name']);
$temp = $_FILES['image']['tmp_name'];

$path = "img/";

$extenstion = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$allowed_img_extension = array("png","jpg","jpeg");

if ($_FILES['image']['size'] > 512000) {
    echo "File terlalu besar";
    return;
}

if (!in_array($extenstion, $allowed_img_extension)) {
    echo "Format tidak di dukung (PNG/JPG Only)";
    return;
}

$upload = move_uploaded_file($temp, $path . $nameFile . "." . $extenstion);
if ($upload) {
    $name = $_POST['judul'];
    $isi = $_POST['isi'];
    $tahun = $_POST['tahun'];
    $sql = "INSERT INTO `data` (`name`, `isi`, `img`, `tahun`) VALUES ('$name','$isi', '$nameFile" . ".$extenstion', '$tahun');";



    $save = mysqli_query($mysqli, $sql);
    echo "Lirik berhasil diupload<br>";
    echo "<a href='lihat.php'>Lihat file</a>";
} else {
    echo "Lirik gagal diupload";
}
?>
</div><br>
<a href="logout.php">LOGOUT</a>
</body>

</html>