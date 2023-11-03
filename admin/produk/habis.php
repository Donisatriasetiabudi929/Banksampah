<?php

    include 'config.php';

    $test = $conn->query("UPDATE produk SET STOK = 'HABIS' WHERE ID = '$_GET[ID]'");
    if ($test) {
        header ('Location: produk.php');
    }

?>;