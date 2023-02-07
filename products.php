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
<a href="checkout.html" id="purchase"class="btn"> Beställ </a>
</div>


<section class="product" id="product">

<h1 style="margin-top: 5rem;"class="heading">våra <span> produkter</span></h1>
<h1 class="side-head">Tårtor</h1>
<hr style="height:50%;text-align:left;margin-left:0; color: black;"> 
<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">äpple pie</h3>
            <span class="price">159 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png">
        </div>
        <div class="content">
            <h3 class="item-title">Cake</h3>
            <span class="price">199 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Potatis</h3>
            <span class="price">119 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">En sak</h3>
            <span class="price">189 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Stor sak</h3>
            <span class="price">279 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">äpple pie</h3>
            <span class="price">159 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png">
        </div>
        <div class="content">
            <h3 class="item-title">Cake</h3>
            <span class="price">199 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">Potatis</h3>
            <span class="price">119 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/item.png" alt="">
        </div>
        <div class="content">
            <h3 class="item-title">En sak</h3>
            <span class="price">189 kr</span>
            <a class="btn btn_shop">lägg till i kundvagn</a>
        </div>
    </div>

</div>

</section>
    <?php 

    ?>

</body>
</html>