<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Akupuntur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body id="">
    <header>
        <div class='container'>
            <h1><a href="index.php">Akupuntur</a></h1>
            <ul>
                <li><a href="login.php">Admin</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="aboutME.php">About ME</a></li>
                <li><a href="testimoni.php">Testimoni</a></li>
            </ul>
        </div>
    </header>

    <div class="bg-login">
        <div class="box-login">
            <h2>Login</h2>
            <form action="" method="POST">
                <input type="text" name="user" placeholder="Username" class="input-control">
                <input type="password" name="pass" placeholder="Password" class="input-control">
                <input type="submit" name="submit" placeholder="Login" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    session_start();
                    include 'db.php';

                    $user = mysqli_real_escape_string($conn, $_POST['user']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                    if(mysqli_num_rows($cek) > 0) {
                        $d = mysqli_fetch_object($cek);
                        $_SESSION['status_login'] = true;
                        $_SESSION['a_global'] = $d;
                        $_SESSION['id'] = $d->admin_id;
                        echo '<script>window.location="dashboard.php"</script>';
                    }else {
                        echo '<script>alert("Username atau password Anda salah!")</script>';
                    }
                }
            ?>
        </div>
    </div>


    
</body>
</html>