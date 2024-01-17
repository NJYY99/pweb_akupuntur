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
    

    <!-- SEARCH -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>
    
    <!-- ABOUT US -->
    <div class="about-heading">
        <h1>About Us</h1>
        <p>Harmoni Sehat, Terapi Akupunktur Sejahtera: Temukan Keseimbangan Energi untuk Hidup yang Berkualitas</p>
        <div class="container">
            <div class="about">
                <div class="about-vidio">
                    <iframe width="560" 
                        height="315" src="https://www.youtube.com/embed/XKBlQqvaAD4?si=SHDdRsAY_UtlfT_q" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="about-content">
                    <h2>Kesehatan berada Di Depan Mata</h2>
                    <p>Selamat datang di Klinik Akupuntur Sejahtera, tempat di mana keharmonisan kesehatan dan 
                        kesejahteraan terwujud. Kami berkomitmen untuk memberikan pengalaman terapi akupunktur berkualitas tinggi, 
                        menggabungkan kearifan tradisional dengan pendekatan ilmiah modern. Tim kami terdiri dari praktisi akupunktur 
                        berpengalaman yang siap membimbing Anda menuju keseimbangan energi tubuh dan meningkatkan kualitas hidup.
                    </p>
                </div>
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