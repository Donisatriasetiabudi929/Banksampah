<?php

session_start();
if(!isset($_SESSION['USERNAME'])){
    header("Location: ../reglog/login.php");
}

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tambahprofile.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <title>TAMBAH PROFILE</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH PROFILE
    </div>
    <div class="form">
        <form action="prosestambah.php" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>NAMA</label>
            <input class="input" type="text" name="NAMA">
        </div>  
        <div class="inputfield">
            <label>NO TELPON</label>
            <input class="input" type="text" name="NOTELP">
        </div> 
        <div class="inputfield">
            <label>EMAIL</label>
            <input class="input" type="text" name="EMAIL">
        </div>
        <div class="inputfield">
            <label>ALAMAT</label>
            <textarea class="input" name="ALAMAT"></textarea>
        </div>
        <div class="inputfield">
            <label>FOTO</label>
            <input type="file" name="IMG" class="input">
        </div>
        <div class="inputfield">
            <input type="submit" value="Tambah" class="btn" name="TAMBAH">
        </div>
        </form>
    </div>
</div>	
</body>
</html>