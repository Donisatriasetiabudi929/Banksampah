<?php

session_start();
if(!isset($_SESSION['USERNAME'])){
    header("Location: ../reglog/login.php");
}


include 'config.php';


$sql = "SELECT * FROM profiledustman WHERE ID_USER ='$_SESSION[ID]'";
$query = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}   

$jumlah = $r['JUMLAH'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FORM TABUNG SAMPAH</title>
	<link rel="stylesheet" href="../style/abouttambah.css">
    <link rel="icon" href="../assets/logo/banksampah.png">

</head>
<body>

<div class="wrapper">
    <div class="title">
        FORM TABUNG SAMPAH
    </div>
    <div class="form">
        <form action="kalkulasi.php" method="post">
        <div class="inputfield">
            <label>JENIS SAMPAH</label>
            <select class="input" name="TYPE">
                <option name="TYPE" value="ORGANIK">ORGANIK</option>
                <option name="TYPE" value="ANORGANIK">ANORGANIK</option>
            </select>
        </div>  
        <div class="inputfield">
            <label>JUMLAH SAMPAH</label>
            <input type="text" name="JUMLAH" class="input">
        </div>  
        <div class="inputfield">
            <input type="submit" value="Tambah" class="btn" name="EDIT">
        </div>
        </form>
    </div>
</div>	
</body>
</html>