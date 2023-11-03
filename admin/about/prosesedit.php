<?php

include 'config.php';

    if (isset($_POST['EDIT'])) {
        $id = $_POST['ID'];
        $about = $_POST['ABOUT'];

        $sql = "UPDATE about SET ID = '$_POST[ID]', ABOUT = '$_POST[ABOUT]' WHERE ID = '$_POST[ID]'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<meta http-equiv=refresh content=2;URL='about.php'>";                
            $username = "";
        }else {
            echo "<script>alert('Data kamar gagal ditambahkan')</script>";
        }
    }

?>