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
    <title>PRODUK | Bank Sampah Indonesia</title>
</head>
<body>
    <div class="container">
        <h1>PRODUK DASHBOARD</h1>
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
                    <th>HARGA</th>
                    <th>GAMBAR</th>
                    <th colspan="2">STOK</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM produk";
                $query = mysqli_query($conn, $sql);
                while($produk = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $produk['ID'] ?></td>
                    <td><?php echo $produk['NAMA'] ?></td>
                    <td><?php echo $produk['HARGA'] ?></td>
                    <td><img src="../../assets/fotoproduk/<?php echo $produk['IMG'] ?>"></td>
                    <td><?php echo $produk['STOK'] ?></td>
                    <td>
                        <a href="edit.php?ID=<?php echo $produk['ID'] ?>">EDIT</a>
                        <?php
                        if ($produk['STOK'] != 'TERSEDIA') {
                        ?>
                            <a href="restok.php?ID=<?php echo $produk['ID'] ?>">RESTOCK</a>
                        <?php
                        }else if($produk['STOK'] != 'HABIS'){
                        ?>
                            <a href="habis.php?ID=<?php echo $produk['ID'] ?>">HABIS</a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
            
            <?php } ?>
        </table>
    </div>
    
</body>
</html>