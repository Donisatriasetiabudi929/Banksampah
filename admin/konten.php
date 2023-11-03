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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../style/konten.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <title>CMS DASHBOARD | Bank Sampah Indonesia</title>
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

    <!-- EDIT KONTEN -->

    <div class="event-container">

<div class="event">
    <div class="event-left">
        <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">ABOUT</h3>

    <div class="event-description">
        EDIT Halaman About untuk Dashboard public
    </div>

    <a href="about/about.php">
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>EDIT</p>
    </div>
    </a>
    </div>
</div>

<div class="event">
    <div class="event-left">
    <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">GALLERY</h3>

    <div class="event-description">
        Untuk Menambah dan mengedit Bagian Gallery di Dashboard
    </div>

    <a href="gallery/gallery.php">
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>EDIT</p>
    </div>
    </a>
    </div>
</div>

<div class="event">
    <div class="event-left">
        <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">EVENT SOSIALISASI</h3>

    <div class="event-description">
        Untuk mengedit dan Menambah Bagian Event sosialisasi di  Dashboard
    </div>

    <a href="event/event.php">
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>EDIT</p>
    </div>
    </a>
    </div>
</div>

<div class="event">
    <div class="event-left">
        <img src="../assets/logo/banksampah.png">
    </div>

    <div class="event-right">
        <h3 class="event-title">PRODUK</h3>

    <div class="event-description">
        Untuk mengedit dan Menambah Bagian Produk di  Dashboard
    </div>

    <a href="produk/produk.php">
    <div class="event-timing">
        <ion-icon name="create-outline"></ion-icon> <p>EDIT</p>
    </div>
    </a>
    </div>
</div>

</div>
</div>
</div>
</body>
</html>