<?php

    include 'config.php';

    $test = $conn->query("UPDATE produk SET STOK = 'TERSEDIA' WHERE ID = '$_GET[ID]'");
    if ($test) {
        header ('Location: produk.php');
    }

?>;