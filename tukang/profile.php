<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/profile.css">
    <title>PROFILE</title>
</head>
<body>
<div class="container">
        <?php
            include("config.php");
            $iduser = $_SESSION['ID'];
            $sql = "SELECT * FROM profiledustman WHERE ID_USER = $iduser ORDER BY ID DESC LIMIT 1";
            $query = mysqli_query($conn, $sql);
            while($profil = mysqli_fetch_assoc($query)){
        ?>
        <div class="box">
            <img src="../assets/fotoprofile/<?php echo $profil['IMG'] ?>">
            <ul>
                <li><?php echo $profil['NAMA']; ?></li>
                <li><a href="index.php">BACK</a></li>
                <li><a href="editprofile.php?ID_USER=<?php echo $profil['ID_USER'] ?>">EDIT</a></li>
            </ul>
        </div>
        <div class="About">
            <ul>
                <h1>PROFILE</h1>
            </ul>
            <ul>
                <h3>NO TELPON</h3>
                <li><?php echo $profil['NOTELP']; ?></li>
            </ul>
            <ul>
                <h3>EMAIL</h3>
                <li><?php echo $profil['EMAIL']; ?></li>
            </ul>
            <ul>
                <h3>JUMLAH SAMPAH YANG DIANGKUT</h3>
                <li><?php echo $profil['JUMLAH']; ?> KG</li>
            </ul>
            <ul>
                <h3>ALAMAT</h3>
                <p><?php echo $profil['ALAMAT']; ?></p>
            </ul>
        </div>
        <?php
            }
        ?>
    </div>


</body>
</html>