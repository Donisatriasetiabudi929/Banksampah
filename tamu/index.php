<?php

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
    <link rel="stylesheet" href="../style/indextamu.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../style/even.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <title>DASHBOARD | BANK SAMPAH</title>
</head>
<body>
<section id="header">
        <header>
            <div class="logo1">
                <a href="index.php"><img class="logo" src="../assets/logo/banksampah.png"></a>
            </div>
		    <nav>
    			<ul class="nav_link">
				    <li><a href="index.php">HOME</a></li>
				    <li><a href="#about">ABOUT</a></li>
				    <li><a href="#ty">GALLERY</a></li>
                    <li><a href="#event">EVENT</a></li>
                    <li><a href="#po">PRODUK</a></li>
                    <li>
                        <?php
                            include 'config.php';
                            if(isset($_SESSION['ID'])) {
                                $user_id = $_SESSION['ID'];
                                
                                $sql = "SELECT * FROM profiletamu WHERE ID_USER = '$user_id'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                  // Jika ada data yang terkait dengan pengguna, lakukan sesuatu
                                ?>
                                <a href="profile.php">PROFILE</a>
                                <?php
                                } else {
                                  // Jika tidak ada data yang terkait dengan pengguna, lakukan sesuatu yang lain
                                ?>
                                <a href="tambahprofile.php">PROFILE</a>
                                <?php
                                }
                                } else {
                                // Jika tidak ada sesi yang terkait dengan pengguna, lakukan sesuatu yang lain
                                echo "Silakan masuk terlebih dahulu.";
                            }
                        ?>
                    </li>
                    <li><a href="../reglog/logout.php">LOGOUT</a></li>
			    </ul>
		    </nav>
	    </header>
        <video src="../assets/video/banner.mp4" autoplay muted loop></video>
        <div class="overlay"></div>
        <div class="header-text">
            <h1>NEGARA <br> INDONESIA</h1>
            <h2>BERSIH DARI SAMPAH</h2>
            <p>MARI TABUNG SAMPAH ANDA</p>
            <?php
            include("config.php");
            $iduser = $_SESSION['ID'];
            $sql = "SELECT * FROM profiletamu WHERE ID_USER = $iduser ORDER BY ID DESC LIMIT 1";
            $query = mysqli_query($conn, $sql);
            while($profil = mysqli_fetch_assoc($query)){
            ?>
            <a href="../sampah/kumpulsampah.php?ID_USER=<?php echo $profil['ID_USER'] ?>"><button>KUMPULKAN SAMPAH</button></a>
            <?php
            }
        ?>
        </div>
    </section>

    <!-- ABOUT -->

    

    <p id="about">
        <?php
            include 'config.php';
            $sql = "SELECT * FROM about";
            $query = mysqli_query($conn, $sql);
            while($about = mysqli_fetch_array($query)){
                echo "$about[1]";
            }
        ?>
    </p>

    <!-- PENCAPAIAN -->
    <div class="pencapaian">
        <h1>PENCAPAIAN KAMI</h1>
        <p>Kami telah menciptakan ekosistem pengelolaan sampah di seluruh indonesia</p>
    </div>
    <div class="tu">
        <div class="kolom">
            <div class="box">
                <h2>928</h2>
                <p>TITIK BANK SAMPAH DI INDONESIA</p>
            </div>
            <div class="box">
                <h2>1023</h2>
                <p>NASABAH</p>
            </div>
            <div class="box">
                <h2>234</h2>
                <p>PENGANGKUT SAMPAH</p>
            </div>
            <div class="box">
                <h2>5</h2>
                <p>SENIMAN KERAJINAN SAMPAH</p>
            </div>
        </div>
    </div>

    <!-- SUPPORT -->
    <div class="support">
        <h1>DUKUNGAN</h1>
        <div class="tu">
        <div class="kolom">
            <div class="box">
                <img src="../assets/logo/logo_bi.png">
                <p class="sp">SMK BINA INFORMATIKA</p>
            </div>
            <div class="box">
                <img src="../assets/logo/lingkunganhidup.png">
                <p class="sp">KEMENTRIAN LINGKUNGAN HIDUP DAN KEHUTANAN</p>
            </div>
            <div class="box">
                <img src="../assets/logo/kesehatan.png">
                <p class="sp">KEMENTRIAN KESEHATAN</p>
            </div>
        </div>
    </div>
    </div>
    

    
    <!-- GALLERY -->
    <div id="ty">
        <div class="wrapper">
        <h1 class="section-header">GALLERY</h1>
        <div class="main-content">
            <?php
                $sql = "SELECT * FROM gallery ORDER BY ID DESC LIMIT 6";
                $result = mysqli_query($conn, $sql);
                while($gallery = mysqli_fetch_array($result)){
            ?>
            <div class="box1">
                <img src="../assets/gallery/<?php  echo $gallery['IMG'] ?>" alt="">
                <div class="img-text">
                    <div class="content">
                        <h2><?php  echo $gallery['TANGGAL'] ?></h2>
                        <p><?php  echo $gallery['KETERANGAN'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
    

    <!-- EVENT -->

    <div id="event">
            <h1>EVENT SOSIALISASI</h1>
            
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
                
                <?php
                    $sql = "SELECT * FROM event ORDER BY ID DESC LIMIT 6";
                    $result = mysqli_query($conn, $sql);
                    while($event = mysqli_fetch_array($result)){
                ?>  
        
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="../assets/fotoevent/<?php  echo $event['IMG'] ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code"><?php  echo $event['TANGGAL'] ?></span>
                        <div class="blog-slider__title"><?php  echo $event['NAMA'] ?></div>
                        <div class="blog-slider__text"><?php  echo $event['KETERANGAN'] ?></div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
                <?php } ?>
                </div>
                <div class="blog-slider__pagination"></div>
            </div>
            
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
            <script type="text/javascript" src="../js/script.js"></script>
        </div>


    <!-- PRODUK -->
    <div id="po">
    <h2>PRODUK</h2>
    <section class="products">
		<div class="all-products">
            <?php
                include 'config.php';
                $sql = "SELECT * FROM produk";
                $result = mysqli_query($conn, $sql);
                while($produk = mysqli_fetch_array($result)){
            ?>  
            <div class="<?php echo $produk['STOK'] ?>">
			<div class="product">
                <img src="../assets/fotoproduk/<?php echo $produk['IMG'] ?>">
				<div class="product-info">
					<h4 class="product-title"><?php echo $produk['NAMA'] ?>
					</h4>
					<p class="product-price">Rp. <?php echo $produk['HARGA'] ?></p>
                    <p class="stock"><?php echo $produk['STOK'] ?></p>
					<a class="product-btn" href="https://wa.me/+62895323425247">Buy Now</a>
				</div>
			</div>
            </div>
            <?php } ?>
		</div>
	</section>
    </div>

    <!-- KONTAK -->
    <div class="kntk">
        <h1>CONTACT</h1>
    <div class="kontak">
        <div class="contact_data2">
        <ul>
            <li>
                <i class="fa-solid fa-location-dot"></i>
                <strong>Location:</strong>
                <p>Jl. Tegal Rotan Raya No.9 A, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15412</p>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <strong>Email:</strong>
                <p>info@smkbinainformatika.sch.id</p>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <strong>Call:</strong>
                <p>(021) - 745 3048</p>
            </li>
            </ul>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.864847151187!2d106.72189747337927!3d-6.281492361483047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0754ef56067%3A0x8220dbf978d54527!2sSMK%20Bina%20Informatika!5e0!3m2!1sen!2sid!4v1682581464313!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact_data">
            <h2>Contact Me</h2>
            <form action="kontak.php" method="post">
                <label for="">Name</label>
                <input type="text" name="NAMA" />
                <label for="">Subject</label>
                <input type="text" name="SUBJEK" />
                <label for="">Email</label>
                <input type="email" name="EMAIL" />
                <label for="">Message</label>
                <textarea name="PESAN" id="" cols="30" rows="05"></textarea>
                <input type="submit" class="sbm" value="Send Message" name="submit">
            </form>
        </div>
        </div>
    </div>

    <!-- FOOTER -->

    <footer>
        <div class="footer-content">
            <img src="../assets/logo/banksampah.png">
            <p>Bank Sampah adalah sebuah inisiatif berbasis komunitas yang mendorong pemisahan dan pengelolaan sampah. Bank Sampah merupakan sistem di mana individu dan rumah tangga dapat menyetorkan sampah mereka yang dapat didaur ulang ke tempat yang disediakan</p>
            <ul class="socials">
                <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 BANK SAMPAH INDONESIA <span>NKRI</span></p>
        </div>
    </footer>   

</body>
</html>