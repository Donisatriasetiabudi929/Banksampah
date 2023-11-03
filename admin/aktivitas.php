<?php

    include 'config.php';

    if(!isset($_GET['ID_USER'])) {
        header('Location: user.php');  
    }
    $id = $_GET['ID_USER'];
    $sql = "SELECT * FROM profiletamu WHERE ID_USER='$_GET[ID_USER]'";
    $query = mysqli_query($conn, $sql);
    $aktivitas = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../style/abouttable.css">
    <title>AKTIVITAS | Bank Sampah Indonesia</title>
</head>
<body>
<div class="container">
        <h1>AKTIVITAS <?php echo $aktivitas['NAMA'] ?></h1>
        <div class="back">
            <a href="user.php">BACK</a>
        </div>
        <table border="1">
            <tr>
                <th>TANGGAL</th>
                <th>TIPE SAMPAH</th>
                <th>JUMLAH KG</th>
                <th>SALDO</th>

            </tr>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM aktivitas WHERE ID_USER = $id ORDER BY ID DESC";
                $query = mysqli_query($conn, $sql);
                while($aktivitas = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $aktivitas['TANGGAL'] ?></td>
                <td><?php echo $aktivitas['TYPE'] ?></td>
                <td><?php echo $aktivitas['JUMLAH'] ?></td>
                <td>+ Rp. <?php echo $aktivitas['UANG'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>