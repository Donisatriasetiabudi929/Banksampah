<?php

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
    <link rel="stylesheet" href="../style/indextukang.css">
    <title>DASHBOARD PENGANGKUT SAMPAH</title>
</head>
<body>

    <img class="logo" src="../assets/logo/banksampah.png">
    <a class="logout" href="../reglog/logout.php">LOGOUT</a>
    <hr>

    <div class="welcome">
        <ul class="one">
            <li><h1 class="satu">WELCOME</h1></li>
            <li><h1 class="dua">DUSTMAN !!!</h1></li>
        </ul>
        <ul class="two">
            <li><h1 class="tiga">MARI</h1></li>
            <li><h1 class="empat">BERSIHKAN</h1></li>
            <li><h1 class="lima">INDONESIA</h1></li>
        </ul>
    </div>

    <!-- ISI -->

    <div class="ambil">
        <a href="ambilsampah.php"><h2>AMBIL SAMPAH</h2></a>
    </div>

    <div class="event-container">

<div class="event">
    <div class="event-left">
        <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">PROFILE</h3>

    <div class="event-description">
        Halaman profile dustman
    </div>
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>
        <?php
            include 'config.php';
            if(isset($_SESSION['ID'])) {
                $user_id = $_SESSION['ID'];
                $sql = "SELECT * FROM profiledustman WHERE ID_USER = '$user_id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                // Jika ada data yang terkait dengan pengguna, lakukan sesuatu
        ?>
            <a href="profile.php">PROFILE</a>
        <?php
            } else {
               // Jika tidak ada data yang terkait dengan pengguna, lakukan sesuatu yang lain
        ?>
            <a href="tambahprofile.php">PROFILE</a>
        <?php
            }
            } else {
                // Jika tidak ada sesi yang terkait dengan pengguna, lakukan sesuatu yang lain
                echo "Silakan masuk terlebih dahulu.";
            }
        ?>
        </p>
    </div>
    </a>
    </div>
</div>

<div class="event">
    <div class="event-left">
    <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">RIWAYAT PENGANGKUTAN</h3>

    <div class="event-description">
        Riwayat pengangkutan sampah dari pusat
    </div>

    <a href="aktivitas.php">
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>EDIT</p>
    </div>
    </a>
    </div>
</div>
</body>
</html>