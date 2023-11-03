<?php
include 'config.php';
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
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link rel="stylesheet" href="../style/useradmin.css">
    <title>USER ADMIN | Bank sampah Indonesia</title>
</head>
<body>
        <header>
            <img class="logo" src="../assets/logo/banksampah.png">
		    <nav>
    			<ul class="nav_link">
				    <li><a href="konten.php">HOME</a></li>
                    <li><a href="user.php">USER</a></li>
                    <li><a href="sampah.php">SAMPAH</a></li>
                    <li><a href="dustman.php">DUSTMAN</a></li>
                    <li><a href="contact.php">KONTAK</a></li>
                    <li><a href="../reglog/logout.php">LOGOUT</a></li>
			    </ul>
		    </nav>
	    </header>

        <!-- USER -->
        <div class="container">
        <h1>DUSTMAN JOIN</h1>
        <div class="search">
            <form action="" method="GET">
                <label>PENCARIAN :</label>
                <input class="text" type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; } ?>">    
                <button type="submit">CARI</button>
            </form>
        </div>
        <table border=1>
		<thead>
			<tr>
				<th>ID</th>
				<th>FOTO</th>
				<th>NAMA</th>
				<th>NO TELPON</th>
				<th>JUMLAH KG</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                include 'config.php';
                if(isset($_GET['cari'])) {
                    $pencarian = $_GET['cari'];
                    $tutu = "SELECT * FROM profiledustman WHERE NAMA LIKE '%".$pencarian."%'";
                }else {
                    $tutu = "SELECT * FROM profiledustman";
                }
				
				$query = mysqli_query($conn, $tutu);
				while($profiletamu = mysqli_fetch_array($query)){
			?>
            <tr>
                <td class="test1"><?php echo $profiletamu['ID'] ?></td>
                <td><img src="../assets/fotoprofile/<?php echo $profiletamu['IMG'] ?>"></td>
                <td class="test2"><?php echo $profiletamu['NAMA'] ?></td>
                <td class="test5"><?php echo $profiletamu['NOTELP'] ?></td>
                <td class="test8"><?php echo $profiletamu['JUMLAH'] ?> KG</td>
                <td><a href="aktivitasdustman.php?ID_USER=<?php echo $profiletamu['ID_USER'] ?>">LIHAT AKTIVITAS</a></td>
            </tr>
            <?php } ?>
		</tbody>
	</table>
    </div>


</body>
</html>