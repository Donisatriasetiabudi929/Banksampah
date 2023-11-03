<?php
            include("config.php");
            $sampah = "SELECT * FROM sampah WHERE ID = 1";
            $query2 = mysqli_query($conn, $sampah);
            while($sampah = mysqli_fetch_assoc($query2)){
                $organik = $sampah['ORGANIK'];
                $anorganik = $sampah['ANORGANIK'];
                $total = $organik + $anorganik;
                echo $total;
            }

            echo date("d-m-Y");
?>