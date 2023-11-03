<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "banksampah";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if(!$conn){
        die("GAGAL TERHUBUNG KE DATABASE");
    }

?>