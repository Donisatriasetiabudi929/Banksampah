<?php

    include 'config.php';

    if(isset($_POST['TAMBAH'])){
        $tanggal = $_POST['TANGGAL'];
        $ket = $_POST['KET'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../../assets/gallery/";

        move_uploaded_file($source, $folder.$gambar);   

        $sql = "INSERT INTO gallery (ID, TANGGAL, KETERANGAN, IMG) VALUES
        ('', '$tanggal', '$ket', '$gambar')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: gallery.php');
        }else {
            echo "<script>alerty('Data gagal ditambah')</script>";
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
    <title>FORM TAMBAH GALLERY</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH GALLERY
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>TANGGAL</label>
            <input class="input" type="date" name="TANGGAL">
        </div>  
        <div class="inputfield">
            <label>KETERANGAN</label>
            <textarea class="input" name="KET"></textarea>
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