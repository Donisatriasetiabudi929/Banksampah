<?php

    include 'config.php';

    if(!isset($_GET['ID'])) {
        header('Location: event.php');  
    }

    $sql = "SELECT * FROM event WHERE ID='$_GET[ID]'";
    $query = mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }

    $nama = $r['NAMA'];
    $tanggal = $r['TANGGAL'];
    $ket = $r['KETERANGAN'];
    $gambar = $r['IMG'];

    if(isset($_POST['EDIT'])){
        $nama = $_POST['NAMA'];
        $tanggal = $_POST['TANGGAL'];
        $ket = $_POST['KETERANGAN'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../../assets/fotoevent/";

        move_uploaded_file($source, $folder.$gambar);

        $sql = "UPDATE event SET NAMA = '$_POST[NAMA]', TANGGAL = '$_POST[TANGGAL]', KETERANGAN = '$_POST[KETERANGAN]',  IMG = '$gambar' WHERE ID='$_GET[ID]'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: event.php');
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
    <link rel="stylesheet" href="../../style/eventtambah.css">
    <title>EDIT GALLERY | Bank Sampah Indonesia</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
        FORM TAMBAH GALLERY
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="inputfield">
            <label>NAMA</label>
            <input class="input" type="text" name="NAMA" value="<?php echo $nama ?>">
        </div> 
        <div class="inputfield">
            <label>TANGGAL</label>
            <input class="input" type="date" name="TANGGAL" value="<?php echo $tanggal ?>">
        </div>  
        <div class="inputfield">
            <label>KETERANGAN</label>
            <input type="text" class="input" name="KETERANGAN" value="<?php echo $ket ?>"></input>
        </div> 
        <div class="inputfield">
            <label>GAMBAR</label>
            <input  type="hidden" name="gambar" value="<?php echo $gambar ?>"></input>
            <input type="file" class="input" name="IMG">
        </div>
        <div class="inputfield">
            <input type="submit" value="Tambah" class="btn" name="EDIT">
        </div>
        </form>
    </div>
</div>	
</body>
</html>