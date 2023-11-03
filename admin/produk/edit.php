<?php

    include 'config.php';

    if(!isset($_GET['ID'])) {
        header('Location: produk.php');  
    }

    $sql = "SELECT * FROM produk WHERE ID='$_GET[ID]'";
    $query = mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }

    $nama = $r['NAMA'];
    $harga = $r['HARGA'];
    $gambar = $r['IMG'];

    if(isset($_POST['EDIT'])){
        $nama = $_POST['NAMA'];
        $harga = $_POST['HARGA'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../../assets/fotoproduk/";

        move_uploaded_file($source, $folder.$gambar);

        $sql = "UPDATE produk SET NAMA = '$_POST[NAMA]', HARGA = '$_POST[HARGA]',  IMG = '$gambar' WHERE ID='$_GET[ID]'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: produk.php');
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
    <title>EDIT PRODUK | Bank Sampah Indonesia</title>
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
            <input class="input" type="text" name="NAMA" value="<?php echo $nama ?>">
        </div>  
        <div class="inputfield">
            <label>HARGA</label>
            <input type="number" class="input" name="HARGA" value="<?php echo $harga ?>"></input>
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