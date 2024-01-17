<?php
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akupuntur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class='container'>
            <h1><a href="index.php">Akupuntur</a></h1>
            <ul>
                <li><a href="login.php">Admin</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="testimoni.php">Testimoni</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="aboutME.php">About ME</a></li>
            </ul>
        </div>
    </header>
    

    <div class="bg-login">
        <div class="box-login">
            <h2>Testimoni</h2>

             <div class="testimoni">
                <form action="#" method="post">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="testimoni">Testimoni:</label>
                    <textarea id="testimoni" name="testimoni" rows="4" required></textarea>

                    <button type="submit">Kirim Testimoni</button>
                </form>
             </div>

        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p><?php echo $a->admin_address ?></p>

            <h4>Email</h4>
            <p><?php echo $a->admin_email ?></p>

            <h4>No. HP</h4>
            <p><?php echo $a->admin_telp ?></p>


            <small>Created by:</small>
        </div>
    </div>
</body>
</html>