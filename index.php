<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinna finbageri</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">

<a href="index.html" class="logo"> <i class="fas fa-bread-slice"></i> bakery </a>

<nav class="navbar">
    <a href="index.php">hem</a>
    <a href="products.php">produkter</a>
    <a href="read_more.php">Om oss</a>
    <a href="index.php">galleri</a>
    <a href="#order">Kontakta oss</a>
</nav>

<div class="icons">
    <div id="cart-btn" class="fas fa-shopping-cart">
        <p class="lenght-text">0</p>
    </div>
    <div id="menu-btn" class="fas fa-bars"></div>
</div>

</header>

<div class="cart-items-container">

<div id="close-form" class="fas fa-times"></div>
<h3 class="title">Varukorg</h3>

<div class="cart-items">
</div>

<div class="cartfoot">
    <h3>Totala</h3>
    <h3 class="total">0kr</h3>
</div>
<a href="checkout.html" id="purchase"class="btn"> Beställ </a>
</div>


    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/slider1.jpg) no-repeat;">
                    <div class="content">
                        <img src="images/logo.png" alt="">
                        <h3>Vi bakar fram vad du vill ha</h3>
                        <a href="products.php" class="btn"> börja handla </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/slider2.jpg) no-repeat;">
                    <div class="content">
                        <h3>Vi bakar fram vad du vill ha</h3>
                        <a href="products.php" class="btn"> börja handla </a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

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
            <a href="read_more.php" class="btn">läs mer</a>
        </div>

    </section>


    <section class="gallery" id="gallery">

        <h1 class="heading">vårt <span> galleri</span></h1>

        <div class="gallery-container">

            <a href="images/gallery1.jpg" class="box">
                <img src="images/gallery1.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery2.jpg" class="box">
                <img src="images/gallery2.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery3.jpg" class="box">
                <img src="images/gallery3.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery4.jpg" class="box">
                <img src="images/gallery4.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery5.jpg" class="box">
                <img src="images/gallery5.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery6.jpg" class="box">
                <img src="images/gallery6.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>


    <section class="parallax">

        <h1 class="heading">Våra <span>produkter</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/parallax-1.png" alt="">
                </div>
                <div class="content">
                    <h3>matbröd</h3>
                    <p>adgadga gad had hdhsfhkajhiadfoi adfhiadfjghoadig safgihasdiogh</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-2.png" alt="">
                </div>
                <div class="content">
                    <h3>tårtor</h3>
                    <p>adgadga gad had hdhsfhkajhiadfoi adfhiadfjghoadig safgihasdiogh</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-3.png" alt="">
                </div>
                <div class="content">
                    <h3>kondisbitar</h3>
                    <p>adgadga gad had hdhsfhkajhiadfoi adfhiadfjghoadig safgihasdiogh</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-3.png" alt="">
                </div>
                <div class="content">
                    <h3>vetebröd</h3>
                    <p>adgadga gad had hdhsfhkajhiadfoi adfhiadfjghoadig safgihasdiogh</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-3.png" alt="">
                </div>
                <div class="content">
                    <h3>Torra kakor</h3>
                    <p>adgadga gad had hdhsfhkajhiadfoi adfhiadfjghoadig safgihasdiogh</p>
                </div>
            </div>

        </div>

    </section>
    <!--
    <section class="review" id="review">

        <h1 class="heading"> kunders <span>recensioner</span> </h1>
        <a href="recension.html" class="btn">vad tycker du?</a>
        <a href="Recension.html" style="position: relative;" class="btn">Alla Recensioner</a>
        <div class="box-container">

            <div class="box">
                <img src="images/profile.png" class="user" alt="">
                <h3>lacy deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>adgnad gadg ad gadjgnadkj gadgjk adgj adgk adk gadjk gadjkg</p>
            </div>

            <div class="box">
                <img src="images/profile.png" class="user" alt="">
                <h3>lacy deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>adgnad gadg ad gadjgnadkj gadgjk adgj adgk adk gadjk gadjkg</p>
            </div>

            <div class="box">
                <img src="images/profile.png" class="user" alt="">
                <h3>lacy deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                </div>
                <p>adgnad gadg ad gadjgnadkj gadgjk adgj adgk adk gadjk gadjkg</p>
            </div>

        </div>

    </section>
-->
    <section class="order" id="order">

        <h1 class="heading"><span>Beställ</span> nu </h1>

        <div class="row">

            <div class="image">
                <img src="images/order.gif" alt="">
            </div>

            <form onsubmit="SendEmail(); reset(); return false;">
                <input type="hidden" name="_subject" value="Ny beställning">
                <div class="inputBox">
                    <input type="text" placeholder="Första namn" id="name">
                    <input type="text" placeholder="Efternamn" id="lastname">
                </div>

                <div class="inputBox">
                    <input type="email" placeholder="email adress" id="email">
                    <input type="tel" placeholder="telefonnummer" id="phone">
                </div>

                <textarea placeholder="Meddelande" name="" cols="30" rows="10" id="message"></textarea>
                <input type="submit" value="Beställ nu" class="btn" id="btn">
            </form>

        </div>

    </section>
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>adress</h3>
                <p>Klockaregatan 7</p>
                <p>511 54 Kinna</p>
                <div class="share">
                    <a href="https://www.facebook.com/kinna.finbageri.1" target="_blank" class="fab fa-facebook-f"></a>
                    <a href="https://www.instagram.com/kinnafinbageri/" target="_blank" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="mailto: butik@kinnafinbageri.se" class="link">butik@kinnafinbageri.se </a>
            </div>

            <div class="box">
                <h3>Ring oss</h3>
                <p>0320-101 68</p>
            </div>

            <div class="box">
                <h3> öppettider </h3>
                <p>Måndag - Fredag: 7:30 - 18:00 <br> Lördag: 9:00 - 13:00  <br> söndag: stängt</p>
            </div>
        </div>

        <div class="credit">gjord av <span><a href="https://netbase.se/" target="_blank">Netbase.se</a></span></a> </div>

    </section>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="js/script.js"></script>

    <script src="js/swiper.js"></script>

    <script src="js/shop.js"></script>

    <script>
    lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>
</body>



</html>