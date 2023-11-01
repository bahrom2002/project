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
                    "/source/css/bootstrap.min.css",
                    "/source/css/layerslider.css",
                    "/source/css/all.min.css",
                    "/source/webfonts/icofont/icofont.min.css",
                    "/source/webfonts/flaticon/flaticon.css",
                    "/source/css/animate.css",
                    "/source/css/owl.carousel.min.css",
                    "/source/css/jquery.fancybox.min.css",
                    "/source/css/template.css",
                    "/source/css/style.css",
                    "/source/css/category/index-2.css",
    ];
    public $js = [
                    "/source/js/jquery-2.1.3.min.js",
                    "/source/js/greensock.js",
                    "/source/js/layerslider.transitions.js",
                    "/source/js/layerslider.kreaturamedia.jquery.js",
                    "/source/js/bootstrap.bundle.min.js",
                    "/source/js/wow.js",
                    "/source/js/owl.carousel.min.js",
                    "/source/js/jquery.fancybox.min.js",
                    "/source/js/jquery.countdown.js",
                    "/source/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
