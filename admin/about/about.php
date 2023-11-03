<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT ADMIN | Bank Sampah Indonesia</title>
    <link rel="icon" href="../../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../../style/abouttable.css">
</head>
<body>
    <div class="container">
        <h1>ABOUT DASHBOARD</h1>
        <div class="back">
            <a href="../konten.php">BACK</a>
        </div>
        <table border="1">
            <?php
                include 'config.php';
                $sql = "SELECT * FROM about";
                $query = mysqli_query($conn, $sql);
                while($about = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th>ID</th>
                <th colspan="2">ABOUT</th>
            </tr>
            <tr>
                <td><?php echo $about['ID'] ?></td>
                <td><?php echo $about['ABOUT'] ?></td>
                <td>
                    <a href="edit.php?ID=<?php echo $about['ID'] ?>">EDIT</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
</body>
</html>