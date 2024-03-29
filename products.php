<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinna finbageri/products</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" async></script>
    <script src="js/shop.js" async></script>

</head>
<body>

<header class="header">

<a href="index.html" class="logo"> <i class="fas fa-bread-slice"></i> bakery </a>

<nav class="navbar">
    <a href="index.php">hem</a>
    <a href="products.php">produkter</a>
    <a href="read_more.php">Om oss</a>
    <a href="index.php">galleri</a>
    <a href="index.php">Kontakta oss</a>
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
<a href="#" draggable="false" id="purchase"class="btn"> Beställ </a>
</div>


<section class="product" id="product">

<h1 style="margin-top: 5rem;"class="heading">våra <span> produkter</span></h1>
<h1 class="side-head">Top <span>Säljare</span></h1>

<div class="box-container" data-mousepos="0"> 

    <div class="box">
        <div class="image">
            <img src="imgProducts/Chokladboll.jpg" draggable="false"alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Chokladboll</h3>
            <span class="price">39 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="imgProducts/biskvitårta.png" draggable="false">
        </div>
        <div class="content">
            <h3 class="item-title">Biskvitårta</h3>
            <span class="price">450 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="imgProducts/potatistårta.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Potatis tårta</h3>
            <span class="price">240 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">En Tårta</h3>
            <span class="price">300 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Den Tårtan</h3>
            <span class="price">280 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Blåbärs Tårta</h3>
            <span class="price">310 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false">
        </div>
        <div class="content">
            <h3 class="item-title">stor Tårta</h3>
            <span class="price">600 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Liten Tårta</h3>
            <span class="price">160 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" draggable="false" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">medel Tårta</h3>
            <span class="price">230 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

</div>

</section>

<section class="footer">

<div class="box-container" data-mousepos="0">

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

    <?php 
    
    ?>

</body>
</html>