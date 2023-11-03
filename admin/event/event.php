<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="icon" href="../../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../../style/gallerytable.css">
    <title>EVENT | Bank Sampah Indonesia</title>
</head>
<body>
    <div class="container">
        <h1>EVENT DASHBOARD</h1>
        <div class="back">
            <a href="../konten.php">BACK</a>
        </div>
        <div class="tambah">
            <a href="tambah.php"><ion-icon name="add-circle-outline"></ion-icon></a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>TANGGAL</th>
                    <th>KET</th>
                    <th colspan="2">GAMBAR</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM event";
                $query = mysqli_query($conn, $sql);
                while($event = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $event['ID'] ?></td>
                    <td><?php echo $event['NAMA'] ?></td>
                    <td><?php echo $event['TANGGAL'] ?></td>
                    <td><?php echo $event['KETERANGAN'] ?></td>
                    <td><img src="../../assets/fotoevent/<?php echo $event['IMG'] ?>"></td>
                    <td>
                        <a href="edit.php?ID=<?php echo $event['ID'] ?>">EDIT</a>
                    </td>
                </tr>
            </tbody>
            
            <?php } ?>
        </table>
    </div>
    
</body>
</html>