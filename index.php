<?php
$title='branD';
$h1='<span>BRAN<span>D</span></span>';
$year=date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?=$title?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="comprehensive">
        <div class="content">
            <header>
                <div class="container">
                    <div class="subcontainer">
                        <div class="logo-and-search">
                            <a href="#" class="logo">
                        <img src="img/Group%202.png" alt="logo">
                        <h1><?=$h1?></h1>
                    </a>
                            <form class="search">
                                <div class="drop-down-button">
                                    Browse
                                    <i class="fas fa-sort-down"></i>
                                    <div class="drop-down-button__drop-menu">
                                        <h3>WOMEN</h3>
                                        <ul class="drop-down-button__drop-list">
                                            <li>
                                                <a href="#">Dresses</a>
                                            </li>
                                            <li>
                                                <a href="#">Tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Sweaters/Knits</a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets/Coats</a>
                                            </li>
                                            <li>
                                                <a href="#">Blazers</a>
                                            </li>
                                            <li>
                                                <a href="#">Denim</a>
                                            </li>
                                            <li>
                                                <a href="#">Leggings/Pants</a>
                                            </li>
                                            <li>
                                                <a href="#">Skirts/Shorts</a>
                                            </li>
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                        </ul>
                                        <h3>MEN</h3>
                                        <ul class="drop-down-button__drop-list">
                                            <li>
                                                <a href="#">Tees/Tank tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Shirts/Polos</a>
                                            </li>
                                            <li>
                                                <a href="#">Sweaters</a>
                                            </li>
                                            <li>
                                                <a href="#">Sweatshirts/Hoodies</a>
                                            </li>
                                            <li>
                                                <a href="#">Blazers</a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets/vests</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="text" placeholder="Search for Item...">
                                <button type="submit" class="btn btn-success">
                            <i class="fas fa-search"></i>
                        </button>
                            </form>
                        </div>
                        <div class="cart-and-account">
                            <div class="cart-and-account__cart">
                                <a href="#">
                            <img src="img/cart.svg" alt="cart">
                        </a>
                                <div class="cart-and-account__cart-content"></div>
                            </div>

                            <div class="account">
                                My Account
                                <i class="fas fa-sort-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="main-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="catalog.html">Man</a>
                        </li>
                        <li class="women">
                            <a href="catalog.html">Women</a>
                            <div class="main-menu__mega-menu">
                                <div class="arrow-up"></div>
                                <div class="main-menu__menu-block">
                                    <h3>WOMEN</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Dresses</a>
                                        </li>
                                        <li>
                                            <a href="#">Tops</a>
                                        </li>
                                        <li>
                                            <a href="#">Sweaters/Knits</a>
                                        </li>
                                        <li>
                                            <a href="#">Jackets/Coats</a>
                                        </li>
                                        <li>
                                            <a href="#">Blazers</a>
                                        </li>
                                        <li>
                                            <a href="#">Denim</a>
                                        </li>
                                        <li>
                                            <a href="#">Leggings/Pants</a>
                                        </li>
                                        <li>
                                            <a href="#">Skirts/Shorts</a>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__menu-block">
                                    <h3>WOMEN</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Dresses</a>
                                        </li>
                                        <li>
                                            <a href="#">Tops</a>
                                        </li>
                                        <li>
                                            <a href="#">Sweaters/Knits</a>
                                        </li>
                                        <li>
                                            <a href="#">Jackets/Coats</a>
                                        </li>
                                        <li>
                                            <a href="#">Blazers</a>
                                        </li>
                                        <li>
                                            <a href="#">Denim</a>
                                        </li>
                                        <li>
                                            <a href="#">Leggings/Pants</a>
                                        </li>
                                        <li>
                                            <a href="#">Skirts/Shorts</a>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__menu-block">
                                    <h3>WOMEN</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Dresses</a>
                                        </li>
                                        <li>
                                            <a href="#">Tops</a>
                                        </li>
                                        <li>
                                            <a href="#">Sweaters/Knits</a>
                                        </li>
                                        <li>
                                            <a href="#">Jackets/Coats</a>
                                        </li>
                                        <li>
                                            <a href="#">Blazers</a>
                                        </li>
                                        <li>
                                            <a href="#">Denim</a>
                                        </li>
                                        <li>
                                            <a href="#">Leggings/Pants</a>
                                        </li>
                                        <li>
                                            <a href="#">Skirts/Shorts</a>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="catalog.html">Kids</a>
                        </li>
                        <li>
                            <a href="catalog.html">Accoseriese</a>
                        </li>
                        <li>
                            <a href="catalog.html">Featured</a>
                        </li>
                        <li>
                            <a href="catalog.html">Hot Deals</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="slider">
                <div class="container">
                    <div class="slider-text">
                        <h2>THE BRAND</h2>
                        <h3>OF LUXERIOUS
                            <span>FASHION</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="offers container">
                <div class="left-side">
                    <a href="" class="tall">
                <img src="img/Layer%2030.jpg" alt="Hot deal for men">
                <div class="offer-info">
                    <h3>Hot deal</h3>
                    <h2>for men</h2>
                </div>
            </a>
                    <a href="" class="short">
                <img src="img/Banner%20(1).jpg" alt="LUXIROUS & trendy ACCESORIES">
                <div class="offer-info">
                    <h3>LUXIROUS & trendy</h3>
                    <h2>ACCESORIES</h2>
                </div>
            </a>
                </div>
                <div class="right-side">
                    <a href="#" class="short">
                <img src="img/Layer%2032.jpg" alt="30% offer women">
                <div class="offer-info">
                    <h3>30% offer</h3>
                    <h2>women</h2>
                </div>
            </a>
                    <a href="#" class="tall">
                <img src="img/Banner.jpg" alt="new arrivals FOR kids">
                <div class="offer-info">
                    <h3>new arrivals</h3>
                    <h2>FOR kids</h2>
                </div>
            </a>
                </div>
            </div>
            <div class="featured container">
                <a class="featured__header-link" href="#">
                    <h2 class="featured__h2">Fetured Items</h2>
                </a>
                <p class="featured__text">Shop for items based on what we featured in this week</p>
                <div class="items">
                    <div class="items__item" itemId="1" name="T-shirt1" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/1.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="2" name="T-shirt2" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/2.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="3" name="T-shirt3" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/3.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="4" name="T-shirt4" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/4.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="5" name="T-shirt5" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/5.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="6" name="T-shirt6" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/6.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="7" name="T-shirt7" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/7.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                    <div class="items__item" itemId="8" name="T-shirt8" price="52">
                        <a href="#" class="items__item-link">
                    <img src="img/8.jpg" alt="Mango  People  T-shirt">
                    <h4 class="items__h4">Mango People T-shirt</h4>
                    <p class="items__p">$52.00</p>
                </a>
                        <a href="#">
                            <div class="items_hovered"></div>
                        </a>
                        <a class="items__add-to-cart-link" href="#">
                    <img class="items__add-to-cart-icon" src="img/cart2.svg" alt="cart"> Add to Cart
                </a>
                    </div>
                </div>
                <a href="#" class="browse">Browse All Product
            <i class="fas fa-long-arrow-alt-right"></i>
        </a>
            </div>
            <div class="container">
                <a href="#" class="special-offer-link">
                    <div class="special-offer">
                        <div class="offer-main">
                            <h2>30%
                                <span>OFFER</span>
                            </h2>
                            <h3>FOR WOMEN</h3>
                        </div>
                        <div class="offer-description">
                            <div class="offer-description__point">
                                <div>
                                    <img class="offer-description__img" src="img/Forma1.svg" alt="icon">
                                </div>
                                <div class="offer-description__point-text">
                                    <h4 class="offer-description__point-h4">Free Delivery</h4>
                                    <p class="offer-description__point-p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                                    </p>
                                </div>
                            </div>
                            <div class="offer-description__point">
                                <div>
                                    <img class="offer-description__img" src="img/Forma2.svg" alt="icon">
                                </div>
                                <div class="offer-description__point-text">
                                    <h4 class="offer-description__point-h4">Sales & discounts</h4>
                                    <p class="offer-description__point-p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                                    </p>
                                </div>
                            </div>
                            <div class="offer-description__point">
                                <div>
                                    <img class="offer-description__img" src="img/Forma3.svg" alt="icon">
                                </div>
                                <div class="offer-description__point-text">
                                    <h4 class="offer-description__point-h4">Quality assurance</h4>
                                    <p class="offer-description__point-p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedback">
                <div class="container">
                    <div class="feedback-content">
                        <div class="reviews">
                            <div class="slider-rev">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="client-feedback">
                                                <img src="img/client_foto.png" alt="client foto">
                                                <div class="client-review">
                                                    <p class="client-review__review">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                                                    </p>
                                                    <p class="client-review__signature">Bin Burhan</p>
                                                    <p class="client-review__residence">Dhaka, Bd</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="client-feedback">
                                                <img src="img/client_foto.png" alt="client foto">
                                                <div class="client-review">
                                                    <p class="client-review__review">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                                                    </p>
                                                    <p class="client-review__signature">Bin Burhan</p>
                                                    <p class="client-review__residence">Dhaka, Bd</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="client-feedback">
                                                <img src="img/client_foto.png" alt="client foto">
                                                <div class="client-review">
                                                    <p class="client-review__review">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                                                    </p>
                                                    <p class="client-review__signature">Bin Burhan</p>
                                                    <p class="client-review__residence">Dhaka, Bd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"-->
                                    <!--data-slide="prev">-->
                                    <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                                    <span class="sr-only">Previous</span>
                                    <!--</a>-->
                                    <!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"-->
                                    <!--data-slide="next">-->
                                    <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="subscribe">
                            <h3>Subscribe</h3>
                            <h4>FOR OUR NEWLETTER AND PROMOTION</h4>
                            <form action="">
                                <input type="text" placeholder="Enter Your Email">
                                <a href="#">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="footer-top">
                    <div class="footer-text">
                        <a href="#" class="logo">
                        <img src="img/logo.png" alt="logo">
                        <span>BRAN
                            <span>D</span>
                        </span>
                    </a>
                        <p>Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships. Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.

                        </p>
                    </div>
                    <nav class="nav-footer-flex">
                        <div class="footer-nav">
                            <h3>COMPANY</h3>
                            <ul>
                                <li>
                                    <a class="footer-nav__link" href="#">Home</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Shop</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">About</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">How It Works</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav">
                            <h3>COMPANY</h3>
                            <ul>
                                <li>
                                    <a class="footer-nav__link" href="#">Home</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Shop</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">About</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">How It Works</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav">
                            <h3>COMPANY</h3>
                            <ul>
                                <li>
                                    <a class="footer-nav__link" href="#">Home</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Shop</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">About</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">How It Works</a>
                                </li>
                                <li>
                                    <a class="footer-nav__link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container flex-bottom">
                    <p>©
                        <?=$year?> Brand All Rights Reserved.</p>
                    <div class="icons">
                        <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                        <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                        <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                        <a href="#">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                        <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="cart.js"></script>
</body>

</html>
