<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
                    "/assets/css/bootstrap.min.css",
                    "/assets/css/layerslider.css",
                    "/assets/css/all.min.css",
                    "/assets/webfonts/icofont/icofont.min.css",
                    "/assets/webfonts/flaticon/flaticon.css",
                    "/assets/css/animate.css",
                    "/assets/css/owl.carousel.min.css",
                    "/assets/css/jquery.fancybox.min.css",
                    "/assets/css/template.css",
                    "/assets/css/style.css",
                    "/assets/css/category/index-2.css",
    ];
    public $js = [
                    "/assets/js/jquery-2.1.3.min.js",
                    "/assets/js/greensock.js",
                    "/assets/js/layerslider.transitions.js",
                    "/assets/js/layerslider.kreaturamedia.jquery.js",
                    "/assets/js/bootstrap.bundle.min.js",
                    "/assets/js/wow.js",
                    "/assets/js/owl.carousel.min.js",
                    "/assets/js/jquery.fancybox.min.js",
                    "/assets/js/jquery.countdown.js",
                    "/assets/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
