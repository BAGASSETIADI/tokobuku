<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <title>Document</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <div>
            <img src="assets/img/logo.png" alt="">
            <a href="#" class="nav__logo">Buka Mata.id</a>
            </div>
        

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link active-link">Menu</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Kontak</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <br>
        <br>
        <div class="row product-row">
            <div class="col-5 col-md-12">
                <div class="product-img" id="product-img">
                    <img src="assets/img/<?= $_GET['gmbr']; ?>"
                        alt="" id="big-img">
                </div>
                
            </div>
            <div class="col-7 col-md-12">
                <div class="product-info">
                    <h1>
                        <?= $_GET['nama']; ?>
                      
                       
                    </h1>
                    <div class="product-info-detail">
                        <span class="product-info-detail-title">Brand:</span>
                        <a href="#">Buka</a>
                    </div>
                    <p class="product-description">
                    <?= $_GET['dsk']; ?>
                    </p>
                    <div class="product-info-price">Rp.<?= $_GET['harga']; ?></div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=6285226037505&text=Silahkan%20isi%20form%20order%21%0A%0ANama%20%3A%20%0AAlamat%20%3A%0ANo%20hp%20%3A"><button class="btn-flat btn-hover">add to cart</button></a>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Mari kita berbicara</span>
                    <h2 class="section-title contact__initial">Kontak</h2>
                    <p class="contact__description">Jika Anda ingin memesan Buku di toko kami, hubungi kami dan kami akan segera melayani Anda, dengan layanan obrolan 24/7 kami.</p>
                </div>

                <div class="contact__button">
                    <a href="https://api.whatsapp.com/send?phone=6285226037505&text=Silahkan%20isi%20form%20order%21%0A%0ANama%20%3A%20%0AAlamat%20%3A%0ANo%20hp%20%3A" class="button">Hubungi</a>
                </div>
            </div>
        </section>
    </main>


    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>

</html>