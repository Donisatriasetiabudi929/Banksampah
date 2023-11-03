<?php

    include 'config.php';

    if(isset($_POST['TAMBAH'])){
        $nama = $_POST['NAMA'];
        $tanggal = $_POST['TANGGAL'];
        $ket = $_POST['KETERANGAN'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../../assets/fotoevent/";

        move_uploaded_file($source, $folder.$gambar);   

        $sql = "INSERT INTO event (ID, NAMA, TANGGAL, KETERANGAN, IMG) VALUES
        ('', '$nama', '$tanggal', '$ket', '$gambar')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: event.php');
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
    <link rel="stylesheet" href="../../style/eventtambah.css">
    <title>TAMBAH EVENT | Bank Sampah Indonesia</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH EVENT
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>NAMA</label>
            <input class="input" type="text" name="NAMA">
        </div> 
        <div class="inputfield">
            <label>TANGGAL</label>
            <input class="input" type="date" name="TANGGAL">
        </div>  
        <div class="inputfield">
            <label>KETERANGAN</label>
            <textarea class="input" name="KETERANGAN"></textarea>
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