<?php

include 'config.php';
error_reporting(0);
session_start();

if(isset($_SESSION['USERNAME'])){
    header('Location: ../tamu/index.php');
}

if(isset($_POST['LOG'])){
    $email = $_POST['EMAIL'];
    $password = md5($_POST['PASSWORD']);

    $sql = "SELECT * FROM users WHERE EMAIL='$email' AND PASSWORD='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['USERNAME'] = $row['USERNAME'];
        $_SESSION['ID'] = $row['ID'];
        if($email == "admin1@gmail.com" && $password = "admin1"){
            header('Location: ../admin/konten.php');
        }else if($email == "dustman1@gmail.com" && $password = "dustman1"){
            header('Location: ../tukang/index.php');
        }else if($email == "dustman2@gmail.com" && $password = "dustman2"){
            header('Location: ../tukang/index.php');
        }else {
            header('Location: ../tamu/index.php');
        }
    }else{
        echo "<script>alert('EMAIL ATAU PASSWORD ANDA SALAH')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>LOGIN | Bank Sampah Indonesia</title>
</head>
<body>
    <div class="box">
        <div class="container">
        <div class="top">
            <a href="register.php"><span>Have an account?</span></a>
            <header>Login</header>
        </div>
            <form action="" method="post">
                <div class="input-field">
                    <input class="input" type="email" name="EMAIL" value="<?php $email; ?>" placeholder="EMAIL">
                    <i class='bx bx-user' ></i>
                </div>
                
                <div class="input-field">
                    <input class="input" type="password" name="PASSWORD" value="<?php $_POST['PASSWORD']; ?>" placeholder="PASSWORD">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input class="submit" type="submit" name="LOG" value="LOGIN"> 
                </div>
                
            </form>
    </div>
    </div>
    
</body>
</html>