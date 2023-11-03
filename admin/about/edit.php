<?php

    include 'config.php';

    if(!isset($_GET['ID'])) {
        header('Location: about.php');  
    }

    $sql = "SELECT * FROM about WHERE ID='$_GET[ID]'";
    $query = mysqli_query($conn, $sql);
    $about = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
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
<div class="edit">
<div class="wrapper">
    <div class="title">
        FORM TAMBAH ABOUT
    </div>
    <div class="form">
        <form action="prosesedit.php" method="post">
        <div class="inputfield">
            <label>ID</label>
            <input type="text" class="input" name="ID" value="<?php echo $about['ID'] ?>"></input>
        </div> 
        <div class="inputfield">
            <label>ABOUT</label>
            <input type="text" class="input" name="ABOUT" value="<?php echo $about['ABOUT'] ?>"></input>
        </div>  
        <div class="inputfield">
            <input type="submit" value="Edit" class="btn" name="EDIT">
        </div>
        </form>
    </div>
</div>	
</div>
</body>
</html>