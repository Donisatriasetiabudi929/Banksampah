<?php

    include 'config.php';

    if(isset($_POST['submit'])){
        $nama = $_POST['NAMA'];
        $subjek = $_POST['SUBJEK'];
        $email = $_POST['EMAIL'];
        $pesan = $_POST['PESAN'];

        $sql = "INSERT INTO kontak (ID, NAMA, EMAIL, SUBJEK, PESAN) VALUES
        ('', '$nama', '$email', '$subjek', '$pesan')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('Location: index.php');
        }else {
            echo "<script>alert('Data gagal ditambah')</script>";
        }
    }

?>