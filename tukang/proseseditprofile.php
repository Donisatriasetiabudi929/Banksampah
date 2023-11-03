<?php
session_start();
include 'config.php';
if(isset($_POST['EDIT'])){
    $iduser = $_SESSION['ID'];
    $nama = $_POST['NAMA'];
    $notelp = $_POST['NOTELP'];
    $email = $_POST['EMAIL'];
    $alamat = $_POST['ALAMAT'];
    $gambar = $_FILES['IMG']['name'];
    $source = $_FILES['IMG']['tmp_name'];
    $folder = "../assets/fotoprofile/";

    move_uploaded_file($source, $folder.$gambar);

    $sql = "UPDATE profiledustman SET NAMA = '$_POST[NAMA]', NOTELP = '$_POST[NOTELP]', EMAIL = '$_POST[EMAIL]', ALAMAT = '$_POST[ALAMAT]', IMG = '$gambar' WHERE ID_USER='$_SESSION[ID]'";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<meta http-equiv=refresh content=2;URL='profile.php'>";
    }else {
        echo "<script>alert('Data gagal diedit')</script>";
    }

}else {
    die("AKSES DILARANG");
}
?>