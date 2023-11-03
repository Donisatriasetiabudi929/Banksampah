<?php
error_reporting(0);

session_start();

if (isset($_SESSION['USERNAME'])) {
    header("Location: index.php");
}
include 'config.php';

    if(isset($_POST['TAMBAH'])){
        $iduser = $_SESSION['ID'];
        $nama = $_POST['NAMA'];
        $notelp = $_POST['NOTELP'];
        $email = $_POST['EMAIL'];
        $alamat = $_POST['ALAMAT'];
        $gambar = $_FILES['IMG']['name'];
        $source = $_FILES['IMG']['tmp_name'];
        $folder = "../assets/fotoprofile/";

        move_uploaded_file($source, $folder.$gambar);   

        $sql = "INSERT INTO profiletamu (ID, ID_USER, NAMA, NOTELP, EMAIL, ALAMAT, SALDO, IMG)
        VALUES ('', '$iduser', '$nama', '$notelp', '$email', '$alamat', '0', '$gambar')";
        $query = mysqli_query($conn, $sql);
        if($query) {
            header ('Location: index.php?status=berhasil');
        }else {
            header ('Location: index.php?status=gagal');
        }
    }else {
        die("Akses dilarang....");
    }

?>