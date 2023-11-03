<?php
include 'config.php';
session_start();
if(!isset($_SESSION['USERNAME'])){
    header("Location: ../reglog/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../style/sampah.css">
    <title>SAMPAH ADMIN | Bank Sampah Indonesia</title>
</head>
<body>
        <header>
            <img class="logo" src="../assets/logo/banksampah.png">
		    <nav>
                <ul class="nav_link">
				    <li><a href="konten.php">HOME</a></li>
                    <li><a href="user.php">USER</a></li>
                    <li><a href="sampah.php">SAMPAH</a></li>
                    <li><a href="dustman.php">DUSTMAN</a></li>
                    <li><a href="contact.php">KONTAK</a></li>
                    <li><a href="../reglog/logout.php">LOGOUT</a></li>
			    </ul>
		    </nav>
	    </header>

        <!-- INFORMASISAMPAH -->

        <div class="info">
            <h1>JUMLAH SAMPAH YANG TERKUMPUL</h1>
        </div>

        <div class="tu">
        <div class="kolom">
            <?php
                $sql = "SELECT * FROM sampah";
                $result = mysqli_query($conn, $sql);
                while($sampah = mysqli_fetch_array($result)){
            ?>
            <div class="box">
                <h2><?php  echo $sampah['ORGANIK'] ?> KG</h2>
                <p>SAMPAH ORGANIK</p>
                <a href="organik.php"><p>LIHAT DATA SAMPAH ORGANIK</p></a>
            </div>
            <div class="box">
                <h2><?php  echo $sampah['TOTAL'] ?> KG</h2>
                <p>TOTAL SAMPAH</p>
            </div>
            <div class="box">
                <h2><?php  echo $sampah['ANORGANIK'] ?> KG</h2>
                <p>SAMPAH ANORGANIK</p>
                <a href="anorganik.php"><p>LIHAT DATA SAMPAH ANORGANIK</p></a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>