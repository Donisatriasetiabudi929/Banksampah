<?php

    include 'config.php';

    if(isset($_POST['TAMBAH'])){
        $nama = $_POST['NAMA'];
        $harga = $_POST['HARGA'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../../assets/fotoproduk/";

        move_uploaded_file($source, $folder.$gambar);   

        $sql = "INSERT INTO produk (ID, NAMA, HARGA, IMG, STOK) VALUES
        ('', '$nama', '$harga', '$gambar', 'TERSEDIA')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: produk.php');
        }else {
            echo "<script>alert('Data gagal ditambah')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../../style/gallerytambah.css">
    <title>FORM TAMBAH PRODUK</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH PRODUK
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>NAMA</label>
            <input class="input" type="text" name="NAMA">
        </div>  
        <div class="inputfield">
            <label>HARGA</label>
            <input class="input" type="number" name="HARGA">
        </div> 
        <div class="inputfield">
            <label>GAMBAR</label>
            <input type="file" class="input" name="IMG">
        </div>
        <div class="inputfield">
            <input type="submit" value="Tambah" class="btn" name="TAMBAH">
        </div>
        </form>
    </div>
</div>	
</body>
</html>