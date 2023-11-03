<?php
session_start();

include 'config.php';


$sql = "SELECT * FROM profiledustman WHERE ID_USER ='$_SESSION[ID]'";
$query = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}

$nama = $r['NAMA'];
$notelp = $r['NOTELP'];
$email = $r['EMAIL'];
$alamat = $r['ALAMAT'];
$gambar = $r['IMG'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/editprofile.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <title>EDIT PROFILE</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH PROFILE
    </div>
    <div class="form">
        <form action="proseseditprofile.php" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>NAMA</label>
            <input class="input" type="text" name="NAMA" value="<?php echo $nama ?>">
        </div>  
        <div class="inputfield">
            <label>NO TELPON</label>
            <input class="input" type="text" name="NOTELP" value="<?php echo $notelp ?>">
        </div> 
        <div class="inputfield">
            <label>EMAIL</label>
            <input class="input" type="text" name="EMAIL" value="<?php echo $email ?>">
        </div>
        <div class="inputfield">
            <label>ALAMAT</label>
            <input type="text" name="ALAMAT" class="input" value="<?php echo $alamat ?>">
        </div>
        <div class="inputfield">
            <label>FOTO</label>
            <input  type="hidden" name="gambar" value="<?php echo $gambar ?>"></input>
            <input type="file" class="input" name="IMG">
        </div>
        <div class="inputfield">
            <input type="submit" value="Edit" class="btn" name="EDIT">
        </div>
        </form>
    </div>
</div>	
</body>
</html>