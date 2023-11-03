<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../style/contact.css">
    <title>CONTACT | Bank Smapah Indonesia</title>
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

        <div class="container">
            <h1>PESAN KONTAK TAMU</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>SUBJEK</th>
                <th colspan="2">PESAN</th>

            </tr>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM kontak";
                $query = mysqli_query($conn, $sql);
                while($kontak = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $kontak['ID'] ?></td>
                <td><?php echo $kontak['NAMA'] ?></td>
                <td><?php echo $kontak['EMAIL'] ?></td>
                <td><?php echo $kontak['SUBJEK'] ?></td>
                <td><?php echo $kontak['PESAN'] ?></td>
                <td><a href="mailto:<?php echo $kontak['EMAIL'] ?>">BALAS</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>