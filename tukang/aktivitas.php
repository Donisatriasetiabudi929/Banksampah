<?php
    session_start();
            include("config.php");
            $iduser = $_SESSION['ID'];
            $sql = "SELECT * FROM profiletamu WHERE ID_USER = $iduser ORDER BY ID DESC LIMIT 1";
            $query = mysqli_query($conn, $sql);
            while($profil = mysqli_fetch_assoc($query)){}
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
        <div class="back">
            <a href="index.php">BACK</a>
        </div>
        <table border="1">
            <tr>
                <th>TANGGAL</th>
                <th>TIPE SAMPAH</th>
                <th>JUMLAH KG</th>
            </tr>
            <?php
                include 'config.php';
                $iduser = $_SESSION['ID'];
                $sql = "SELECT * FROM aktivitasdustman WHERE ID_USER = $iduser ORDER BY ID DESC";
                $query = mysqli_query($conn, $sql);
                while($aktivitas = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $aktivitas['TANGGAL'] ?></td>
                <td><?php echo $aktivitas['TYPE'] ?></td>
                <td><?php echo $aktivitas['JUMLAH'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>