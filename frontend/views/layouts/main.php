<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\MyAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

MyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bengo - Multipurpose Ecommerce HTML Template">

    <meta name="author" content="root">
    <title>Bengo - Multipurpose Ecommerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div id="page_wrapper" class="bg-white">

    <!--==================== My Account Popup Section Start ====================-->
    <div id="unicode-signin-up-popup" class="unicode-signin-up-popup modal fade" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="woocommerce">
                    <div id="customer_login" class="unicode-login-signup">
                        <div class="customer-login">
                            <div class="customer-login-left">
                                <h2>Login</h2>
                                <p>Get access to your Orders, Wishlist and Recommendations.</p>
                            </div>
                            <div class="customer-login-right">
                                <form class="woocommerce-form woocommerce-form-login login" method="post" action="/site/index">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="Enter Username/Email address" value="">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="Enter Password" autocomplete="current-password"><span class="show-password-input"></span></span>
                                    </p>
                                    <p class="form-row woocommerce-rememberme-lost_password">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                        </label>
                                        <a class="woocommerce-LostPassword" href="/site/index">Lost your password?</a>
                                    </p>
                                    <p class="woocommerce-login-button">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="27680707e2">
                                        <input type="hidden" name="_wp_http_referer" value="/minimal/">
                                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" data-bs-dismiss="modal" class="btn btn-secondary mt-4">Close</button>
            </div>
        </div>
    </div>
    <header class="ecommerce-header fixed-bg-white">
        <div class="top-header bg-light d-none d-lg-block">
            <div class="container">
                <div class="row row-cols-lg-2 justify-content-between align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex top-header-col justify-content-end align-items-center">
                                <div class="icon-text-1"><i class="icofont-tick-mark text-dark ifs-20 pe-2"></i><span>Free Shiping Over</span> <span class="text-primary ms-1">$100</span></div>
                                <div class="icon-text-1"><i class="icofont-tick-mark text-dark ifs-20 pe-2"></i><span>Return Policy</span> <span class="text-primary ms-1">180Days</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="margin-right-3 d-flex flex-wrap align-content-center justify-content-end">
                            <div class="language-switcher">
                                <form action="/site/index">
                                    <div class="select-appearance-general">
                                        <select class="form-control">
                                            <option selected="">English</option>
                                            <option value="1">Français</option>
                                            <option value="2">Deutsch</option>
                                            <option value="3">العربية</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="top-newsletter"><a href="/site/index">Newsletter</a></div>
                            <div class="top-help-center"><a href="/site/index">Help & Conatct</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-wrap align-items-center justify-content-between">
                        <div class="main-nav d-flex align-items-center flex-grow-1 me-4">
                            <nav class="navbar navbar-expand-lg nav-dark nav-primary-hover w-100">
                                <a class="navbar-brand" href="/site/index"><img class="nav-logo" src="assets/images/logo/2.png" alt="Image not found !"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="navbar-toggler-icon flaticon-menu-2 flat-small text-primary"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item dropdown">
                                            <a href="/site/index">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="element.html">Element</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="element-banner.html">Banner</a></li>
                                                <li><a class="dropdown-item" href="element-blog.html">Blog</a></li>
                                                <li><a class="dropdown-item" href="element-cart.html">Cart</a></li>
                                                <li><a class="dropdown-item" href="element-category.html">Category</a></li>
                                                <li><a class="dropdown-item" href="element-footer.html">Footer</a></li>
                                                <li><a class="dropdown-item" href="element-newsletter.html">Newsletter</a></li>
                                                <li><a class="dropdown-item" href="element-portfolio.html">Portfolio</a></li>
                                                <li><a class="dropdown-item" href="element-product.html">Product</a></li>
                                                <li><a class="dropdown-item" href="element-service.html">Service</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="shop.html">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="shop.html">Shop 1</a></li>
                                                <li><a class="dropdown-item" href="shop-2.html">Shop 2</a></li>
                                                <li><a class="dropdown-item" href="shop-3.html">Shop 3</a></li>
                                                <li><a class="dropdown-item" href="product-details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/site/index">Hot Deals</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/site/index">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="about.html">About</a></li>
                                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                                <li><a class="dropdown-item" href="condition.html">Terms & Conditions</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="md-positioning d-flex align-items-center justify-content-end">
                            <div class="me-3 me-sm-5">
                                <div class="header-search-2">
                                    <a href="/site/index" class="search top-quantity">
                                        <div class="icon search-icon">
                                            <i class="flaticon-search flat-mini"></i>
                                        </div>
                                        <span class="text">Search</span>
                                    </a>
                                </div>
                            </div>
                            <div class="margin-right-1 d-flex align-items-center justify-content-end h-100">
                                <div class="header-cart-3">
                                    <a href="/site/index" class="cart has-cart-data top-quantity" title="View Cart">
                                        <div class="icon cart-icon">
                                            <i class="flaticon-add-to-basket flat-mini"></i>
                                            <span class="header-cart-count">1</span>
                                        </div>
                                        <span class="text">Cart</span>
                                    </a>
                                    <div class="cart-popup">
                                        <div class="widget_shopping_cart_content" style="opacity: 1;">
                                            <ul class="cart_list woocommerce-mini-cart product_list_widget">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="/site/index" class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                                                    <a class="mini_cart_item_image product-image bg-light" href="/site/index">
                                                        <img src="assets/images/thumb/square-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" width="300" height="300">
                                                    </a>
                                                    <a class="product-name" href="/site/index">Hand Made Cloth</a>
                                                    <div class="variation">
                                                        <span>Vendor:</span>
                                                        <span><a href="/site/index" rel="tag">Handy Crafts</a>, <a href="/site/index" rel="tag">Office Tools</a></span>
                                                    </div>
                                                    <div class="cart-item-quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>25.00</bdi>
                                                            </span>
                                                    </div>
                                                </li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="/site/index" class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                                                    <a class="mini_cart_item_image product-image bg-light" href="/site/index">
                                                        <img src="assets/images/thumb/square-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" width="300" height="300">
                                                    </a>
                                                    <a class="product-name" href="/site/index">Women Fish Cut Cloth</a>
                                                    <div class="variation">
                                                        <span>Vendor:</span>
                                                        <span><a href="/site/index" rel="tag">Dress</a></span>
                                                    </div>
                                                    <div class="cart-item-quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>106.88</bdi>
                                                            </span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="total-cart justify-content-between">
                                                <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>131.88</bdi>
                                                    </span>
                                            </div>
                                            <div class="woocommerce-mini-cart__buttons buttons">
                                                <a href="/site/index" class="button wc-forward">View cart</a><a href="/site/index" class="button checkout wc-forward">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-wishlist-3">
                                    <a href="/site/index" class="wishlist top-quantity">
                                        <div class="icon wishlist-icon">
                                            <i class="flaticon-like flat-mini"></i>
                                            <span class="header-wishlist-count">1</span>
                                        </div>
                                        <span class="text">Wishlist</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <?= $content ?>


    <footer class="full-row footer-2 bg-white">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget-nav">
                        <h3 class="widget-title mb-4">Information</h3>
                        <ul>
                            <li><a href="/site/index">Trams & Condition</a></li>
                            <li><a href="/site/index">How To Buy</a></li>
                            <li><a href="/site/index">Privecy Policy</a></li>
                            <li><a href="/site/index">Refund Policy</a></li>
                            <li><a href="/site/index">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget-nav">
                        <h3 class="widget-title mb-4">Links</h3>
                        <ul>
                            <li><a href="/site/index">Popular Items</a></li>
                            <li><a href="/site/index">Categories</a></li>
                            <li><a href="/site/index">Hot & Tranding</a></li>
                            <li><a href="/site/index">Testimonials</a></li>
                            <li><a href="/site/index">Why Bango</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                    <div class="footer-widget widget_fliker_photo">
                        <h3 class="widget-title mb-4">Instagram</h3>
                        <ul>
                            <li>
                                <a href="assets/images/gallery/8.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/8.png" alt=""></a>
                            </li>
                            <li>
                                <a href="assets/images/gallery/9.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/9.png" alt=""></a>
                            </li>
                            <li>
                                <a href="assets/images/gallery/10.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/10.png" alt=""></a>
                            </li>
                            <li>
                                <a href="assets/images/gallery/11.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/11.png" alt=""></a>
                            </li>
                            <li>
                                <a href="assets/images/gallery/12.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/12.png" alt=""></a>
                            </li>
                            <li>
                                <a href="assets/images/gallery/13.png" data-fancybox="gallery" data-caption="Caption for single image"><img src="assets/images/gallery/13.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-3 col-md-6 col-sm-8">
                    <div class="footer-widget">
                        <h3 class="widget-title mb-4">Bango</h3>
                        <p>Lorem ipsum dolor seat ameat dui too consecteture elite. More be consecteture elite more be consecteture elite.</p>
                    </div>
                    <div class="footer-widget widget-contact-with-icon">
                        <ul>
                            <li><i class="fas fa-mobile-alt"></i><span>(00) 11 22 3456</span></li>
                            <li><i class="fas fa-map-marker-alt"></i><span>Bango Shop Store, Street Address, NY City</span></li>
                            <li><i class="fas fa-envelope"></i><span>Support@bango.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="copyright copyrihgt-2 d-flex flex-wrap justify-content-between align-items-center">
                        <span class="copyright-text">Copyright © 2021 UNICODER</span>
                        <div class="social-media-2">
                            <a href="/site/index"><i class="fab fa-facebook-f"></i></a>
                            <a href="/site/index"><i class="fab fa-pinterest-p"></i></a>
                            <a href="/site/index"><i class="fab fa-instagram"></i></a>
                            <a href="/site/index"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================== Footer 2 Section End ====================-->

    <!-- Scroll to top -->
    <a href="/site/index" class="bg-primary text-white" id="scroll"><i class="fa fa-angle-up"></i></a>
    <!-- End Scroll To top -->

</div>

<!-- Include Scripts -->


<!-- Initializing the slider -->
<script>
    $(document).ready(function() {
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'fullwidth',
            responsiveUnder: 0,
            layersContainer: 1200,
            hideUnder: 0,
            hideOver: 100000,
            skin: 'v6',
            globalBGColor: '#ffffff',
            navStartStop: false,
            skinsPath: 'assets/skins/',
            height: 900
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();?>

