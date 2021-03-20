<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Exam</title>
    <link rel="stylesheet" type="text/css" href="assets/css/halaman.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body>
    <!-- loader -->
    <div class="bg-loader">
        <div class="loader">
        </div>
    </div>

    <!-- header -->
    <nav id="navbar">
        <div class="container">
            <h1><a href="index.php"><i class="fas fa-home"></i> <span class="span">Rumahku</span>.Com</a></h1>
            <ul>
                <li>
                    <a href="index.php">
                        <h4>Home</h4>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <h4>About Us</h4>
                    </a>
                </li>
                <li>
                    <a href="#events">
                        <h4>Events</h4>
                    </a>
                </li>
                <li>
                    <a href="#gallery">
                        <h4>Gallery</h4>
                    </a>
                </li>
                <li>
                    <a href="#feedback">
                        <h4>Feedback</h4>
                    </a>
                </li>
                <li>
                    <a href="register.html">
                        <h4>Register</h4>
                    </a>
                </li>
                <li><a href="form.php" class="login"><b>Login</b></a></li>
            </ul>
        </div>
    </nav>

    <!-- banner -->
    <header id="showcase">
        <div class="showcase-content">
            <h2>Selamat Datang Di Website Penjualan Rumah Terbaik</h2>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <div class="main">
                <div class="img"></div>
                <h1>Rumahku.Com</h1>
                <div class="text">Rumah <strong>impian</strong> masa depan.</div>
                <p class="p">Pilihan terbaik bagi anda dengan fasilitas yang kami sediakan.</p>
                <ul>
                    <li><a href="#"><img src="assets/img/fb.png" width="25px" height="25px"></a></li>
                    <li><a href="#"><img src="assets/img/ig.png" width="25px" height="25px"></a></li>
                    <li><a href="#"><img src="assets/img/tw.png" width="25px" height="25px"></a></li>
                    <li><a href="#"><img src="assets/img/link.png" width="25px" height="25px"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section id="events" class="what">
        <div class="container">
            <h3>EVENTS</h3>
            <div class="items">
                <div class="item">
                    <i class="fas fa-university fa-2x"></i>
                    <div>
                        <h3>Rumah Terbaik</h3>
                        <p>Rumah mewah dengan harga terjangkau.</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fas fa-car fa-2x"></i>
                    <div>
                        <h3>Car Port</h3>
                        <p>Terdapat garasi kendaraan pribadi.</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fas fa-restroom fa-2x"></i>
                    <div>
                        <h3>Kamar 3</h3>
                        <p>Terdapat 3 kamar yang nyaman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <h3>GALLERY</h3>
        <div class="container-gallery">
            <div class="card">
                <div class="header"><img src="assets/img/tamu.jpg"></div>
                <div class="content">
                    <p><strong>Ruang Tamu</strong></p>
                </div>
            </div>
            <div class="card besar">
                <div class="header"><img src="assets/img/rumah.jpg"></div>
                <div class="content">
                    <p><strong>Rumah</strong></p>
                </div>
            </div>
            <div class="card">
                <div class="header"><img src="assets/img/kamar.jpg"></div>
                <div class="content">
                    <p><strong>Kamar</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- feedback -->
    <section class="feedback" id="feedback">
        <div class="container">
            <h3>FEEDBACK</h3>
            <div class="feed">
                <form action="">
                    <label for="username">Username</label>
                    <input type="text" name="firstname" placeholder="Username">

                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">

                    <label for="masukan">Masukan</label>
                    <textarea name="masukan" placeholder="Masukan ....." style="max-height: 250px; height: 150px;"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - Al Riansyah. All Rights Reserved.</small>
        </div>
    </footer>

    <!-- efek scroll -->
    <script src="assets/js/efekScroll.js"></script>
    <!-- menghentikan bg loader -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>
</body>

</html>