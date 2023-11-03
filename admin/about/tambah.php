<?php

    include 'config.php';

    if(isset($_POST['TAMBAH'])){
        $about = $_POST['ABOUT'];

        $sql = "INSERT INTO about (ID, ABOUT) VALUES
        ('', '$about')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: ../konten.php');
        }else {
            echo "<script>alert('Data gagal ditambah')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FORM TAMBAH ABOUT</title>
	<link rel="stylesheet" href="../../style/abouttambah.css">
    <link rel="icon" href="../../assets/logo/banksampah.png">

</head>
<body>

<div class="wrapper">
    <div class="title">
        FORM TAMBAH ABOUT
    </div>
    <div class="form">
        <form action="" method="post">
        <div class="inputfield">
            <label>ABOUT</label>
            <textarea class="input" name="ABOUT"></textarea>
        </div>  
        <div class="inputfield">
            <input type="submit" value="Tambah" class="btn" name="TAMBAH">
        </div>
        </form>
    </div>
</div>	
</body>
</html>