<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../style/organik.css">
    <title>DATA SAMPAH ORGANIK | Bank Sampah Indonesia</title>
</head>
<body>
    <div class="container">
        <h1>DATA PEMASUKKAN SAMPAH ORGANIK</h1>
        <div class="back">
            <a href="sampah.php">BACK</a>
        </div>
        <table>
            <tr>
                <th>TANGGAL</th>
                <th>TIPE SAMPAH</th>
                <th>PEMASUKKAN</th>
            </tr>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM aktivitas WHERE TYPE = 'ANORGANIK' ORDER BY ID DESC";
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