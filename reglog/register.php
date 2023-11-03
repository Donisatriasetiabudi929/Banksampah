<?php

include 'config.php';
error_reporting(0);
session_start();

    if(isset($_POST['TAMBAH'])){
        $username = $_POST['USERNAME'];
        $email = $_POST['EMAIL'];
        $password = md5($_POST['PASSWORD']);
        $cpassword = md5($_POST['CPASSWORD']);

        if($password == $cpassword){
            $sql = "SELECT * FROM users WHERE EMAIL='$email'";
            $result = mysqli_query($conn, $sql);

            if(!$result->num_rows > 0){
                $sql = "INSERT INTO users (ID, USERNAME, EMAIL, PASSWORD) VALUE
                ('', '$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header('Location: login.php');
                }else{
                    echo "<script>alert('TERJADI KESALAHAN');</script>";
                }
            }else{
                echo "<script>alert('Email sudah terdaftar');</script>";
            }
        }else {
            echo "<script>alert('Password tidak sesuai')</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/register.css">
    <link rel="icon" href="../assets/logo/banksampah.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>REGISTER | Bank Sampah Indonesia</title>
</head>
<body>

    <div class="box">
        <div class="container">
        <div class="top">
            <a href="login.php"><span>Have an account</span></a>
            <header>Register</header>
        </div>
            <form action="" method="post">
                <div class="input-field">
                <input class="input" type="text" name="USERNAME" value="<?php echo $username; ?>"placeholder="Username">
                <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                <input class="input" type="text" name="EMAIL" value="<?php echo $email; ?>" placeholder="Email">
                <i class='bx bx-user'></i>
                </div>
                
                <div class="input-field">
                <input class="input" type="password" name="PASSWORD" value="<?php echo $_POST['PASSWORD']; ?>" placeholder="Password">
                <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                <input class="input" type="password" name="CPASSWORD" value="<?php echo $_['CPASSWORD']; ?>" placeholder="Confirm password"><br>
                <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                <input class="submit" type="submit" name="TAMBAH" value="REGISTER">
                </div>
                
            </form>
    </div>
    </div>
</body>
</html>