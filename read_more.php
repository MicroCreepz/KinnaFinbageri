<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinna finbageri</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- header -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-bread-slice"></i> bakery </a>

        <nav class="navbar">
            <a href="index.php">hem</a>
            <a href="products.php">produkter</a>
            <a href="read_more.php">Om oss</a>
            <a href="index.php">galleri</a>
            <a href="index.php">Kontakta oss</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <div class="cart-items-container">

        <div id="close-form" class="fas fa-times"></div>
        <h3 class="title">Min kundvagn</h3>
        <div id="cartItem">Din kundvagn är tom</div>


        <div class="cartfoot">
            <h3>Totala</h3>
            <h3 id="total">0.00kr</h3>
        </div>

        <a href="checkout.html" class="btn"> checkout </a>

    </div>

    <section class="about" id="about">

        <h1 class="heading"> <span>om</span> oss </h1>

        <div class="row">
            <div class="image">
                <img src="images/about.png" alt="">
            </div>
                <div class="content">
                    <h3>Info om huset <span>här </span>ska det stå</h3>
                    <p>adgadhgadh adhadhad hadhadhadh adhadhad hadhadha adhaahdahad had had h</p>
                    <p>adgadhgadh adhadhad hadhadhadh adhadhad hadhadha adhaahdahad had had h</p>
                </div>
        </div>
        <div class="row">
            <div class="content">
                <h3>Info om huset <span>här </span>ska det stå</h3>
                <p>adgadhgadh adhadhad hadhadhadh adhadhad hadhadha adhaahdahad had had h</p>
                <p>adgadhgadh adhadhad hadhadhadh adhadhad hadhadha adhaahdahad had had h</p>
            </div>

            <div class="image">
                <img src="images/about.png" alt="">
            </div>
        </div>

    </section>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>
    <!-- shopping cart end-->