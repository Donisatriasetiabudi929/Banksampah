<?php

session_start();
include 'config.php';

    $iduser = $_SESSION['ID'];
    $sql = "SELECT * FROM profiledustman WHERE ID_USER = $iduser ORDER BY ID DESC LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while($profil = mysqli_fetch_assoc($query)){
        $saldoawal = $profil['JUMLAH'];
    }

    $sampah = "SELECT * FROM sampah WHERE ID = 1";
    $query2 = mysqli_query($conn, $sampah);
    while($sampah = mysqli_fetch_assoc($query2)){
        $organik = $sampah['ORGANIK'];
        $anorganik = $sampah['ANORGANIK'];
        $total = $organik + $anorganik;
    }

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");

if(isset($_POST['EDIT'])){
    $iduser = $_SESSION['ID'];
    $type = $_POST['TYPE'];
    $jumlah = $_POST['JUMLAH'];

    if ($type == "ORGANIK"){
        $update = "UPDATE sampah SET ORGANIK = ORGANIK - $jumlah WHERE ID = 1";
        $query = mysqli_query($conn, $update);

        $updatesaldo = "UPDATE profiledustman SET JUMLAH = JUMLAH + $jumlah WHERE ID_USER='$_SESSION[ID]'";
        $query = mysqli_query($conn, $updatesaldo);

        $tambahaktivitas = "INSERT INTO aktivitasdustman (ID, ID_USER, TANGGAL, TYPE, JUMLAH)
        VALUES ('', '$iduser', '$tanggal', '$type', '$jumlah')";
        $query = mysqli_query($conn, $tambahaktivitas);

        if($query){
            echo "<meta http-equiv=refresh content=2;URL='profile.php'>";
        }else {
            echo "<script>alert('Data gagal diedit')</script>";
        }


    }else if ($type == "ANORGANIK"){
        $update = "UPDATE sampah SET ANORGANIK = ANORGANIK - $jumlah WHERE ID = 1";
        $query = mysqli_query($conn, $update);

        $updatesaldo = "UPDATE profiledustman SET JUMLAH = JUMLAH + $jumlah WHERE ID_USER='$_SESSION[ID]'";
        $query = mysqli_query($conn, $updatesaldo);

        $tambahaktivitas = "INSERT INTO aktivitasdustman (ID, ID_USER, TANGGAL, TYPE, JUMLAH)
        VALUES ('', '$iduser', '$tanggal', '$type', '$jumlah')";
        $query = mysqli_query($conn, $tambahaktivitas);

        if($query){
            echo "<meta http-equiv=refresh content=2;URL='profile.php'>";
        }else {
            echo "<script>alert('Data gagal diedit')</script>";
        }
    }
    $totalkeseluruhan = $total - $jumlah;
    $updatetotalsampah = "UPDATE sampah SET TOTAL = $totalkeseluruhan WHERE ID = 1";
    $query = mysqli_query($conn, $updatetotalsampah);

}else {
    die("AKSES DILARANG");
}

?>