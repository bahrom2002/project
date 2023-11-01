(function($) {
    'use strict';

    /* Settings List Table
	
	  * Cache jQuery Selector
	  
    */

    // Cache jQuery Selector
    var $window = $(window),
        $page_wrapper = $('#page_wrapper'),
        $sidenav = $('.navbar-slide-push .push-nav-toggle'),
        $header = $('header'),
        $navigation = $('#navbarSupportedContent'),
        $dropdown = $('.dropdown-toggle'),
        $owl = $('.autoplay-on'),
        $single_carousel = $('.single-carousel'),
        $two_carousel = $('.two-carousel'),
        $three_carousel = $('.three-carousel'),
        $four_carousel = $('.four-carousel'),
        $six_carousel = $('.six-carousel');


    // Scroll top by clicking arrow up
    $window.scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 100);
        return !1;
    });

    // Update Header Style + Scroll to Top
    function headerStyle() {
        if ($window.width() >= 992) {
            if ($header.length) {
                var windowpos = $window.scrollTop();
                if (windowpos >= 200) {
                    $header.addClass('fixed-top');
                } else {
                    $header.removeClass('fixed-top');
                    $page_wrapper.removeClass('overlay');
                }
            }
        }
    }

    // Auto active class adding with navigation
    $window.on('load', function() {
        var current = location.pathname;
        var $path = current.substring(current.lastIndexOf('/') + 1);
        $('#navbarSupportedContent li a').each(function(e) {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($path == $this.attr('href')) {
                $this.parent('li').addClass('active');
            } else if ($path == '') {
                $('.navbar-nav li:first-child').addClass('active');
            }
        })
    });

    // dropdown submenu on hover in desktopand dropdown sub menu on click in mobile 
    $navigation.each(function() {
        $dropdown.on('click', function(e) {
            if ($window.width() < 1100) {
                if ($(this).parent('.dropdown').hasClass('visible')) {
                    $(this).parent('.dropdown').children('.dropdown-menu').first().stop(true, true).slideUp(300);
                    $(this).parent('.dropdown').removeClass('visible');
                    // window.location = $(this).attr('href');
                } else {
                    e.preventDefault();
                    $(this).parent('.dropdown').siblings('.dropdown').children('.dropdown-menu').slideUp(300);
                    $(this).parent('.dropdown').siblings('.dropdown').removeClass('visible');
                    $(this).parent('.dropdown').children('.dropdown-menu').slideDown(300);
                    $(this).parent('.dropdown').addClass('visible');
                }
                e.stopPropagation();
            }
        });

        $('body').on('click', function(e) {
            $dropdown.parent('.dropdown').removeClass('visible');
        });

        $window.on('resize', function() {
            if ($window.width() > 991) {
                $('.dropdown-menu').removeAttr('style');
                $('.dropdown ').removeClass('visible');
            }
        });
    });

    // Put slider space for nav not in mini screen
    if (document.querySelector('.nav-on-top') !== null) {
        var get_height = jQuery('.nav-on-top').height();
        if (get_height > 0 && $window.width() > 991) {
            jQuery('.nav-on-top').next().css('margin-top', get_height);
        }
        $window.on('resize', function() {
            $header.removeClass('fixed-top');
            $page_wrapper.removeClass('overlay');
            var get_height = jQuery('.nav-on-top').height();
            if ($window.width() < 991) {
                jQuery('.nav-on-top').next().css('margin-top', '0');
            } else {
                jQuery('.nav-on-top').next().css('margin-top', get_height);
            }
        });
    }
    if (document.querySelector('.nav-on-banner') !== null) {
        var get_height = jQuery('.nav-on-banner').height();
        if (get_height > 0 && $window.width() > 991) {
            jQuery('.nav-on-banner').next().css('padding-top', get_height);
        }
        $window.on('resize', function() {
            $header.removeClass('fixed-top');
            $page_wrapper.removeClass('overlay');
            var get_height = jQuery('.nav-on-banner').height();
            if ($window.width() < 991) {
                jQuery('.nav-on-banner').next().css('padding-top', '0');
            } else {
                jQuery('.nav-on-banner').next().css('padding-top', get_height);
            }
        });
    }



    // View Cart hover items toggle show hide
    if ($('[class*="header-cart-"]').has('.cart-popup')) {
        $('.has-cart-data').on('click', function(e) {
            e.preventDefault();
            if ($(this).parent('[class*="header-cart-"]').hasClass('show')) {
                $(this).parent('[class*="header-cart-"]').removeClass('show');
            } else {
                $(this).parent('[class*="header-cart-"]').addClass('show');
            }
            e.stopPropagation();
        });
        $(document).on('click', function(e) {
            var container = $('.cart-popup');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('[class*="header-cart-"]').hasClass('show')) {
                    $('[class*="header-cart-"]').removeClass('show');
                }
            }
        });
    }

    // Custom accordion useable settings for any type of accordion system
    if (document.querySelector('.bb-accordion') !== null) {
        $('.ac-toggle').on('click', function(e) {
            e.preventDefault();

            var $this = $(this);

            if ($this.hasClass('active') && $this.next().hasClass('show')) {
                $this.removeClass('active');
                $this.next().removeClass('show');
                $this.next().slideUp(350);
            } else {

                // Check accordion type: for single item open
                if ($this.parent().parent().hasClass('ac-single-show')) {
                    $this.parent().parent().find('.ac-card .ac-toggle').removeClass('active');
                    $this.parent().parent().find('.ac-card .ac-collapse').removeClass('show');
                    $this.parent().parent().find('.ac-card .ac-collapse').slideUp(350);
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }

                // Check accordion type: for group item open
                else if ($this.parent().parent().hasClass('ac-group-show')) {
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }

                // Default if not use any accordion type
                else {
                    $this.parent().parent().find('.ac-card .ac-toggle').removeClass('active');
                    $this.parent().parent().find('.ac-card .ac-collapse').removeClass('show');
                    $this.parent().parent().find('.ac-card .ac-collapse').slideUp(350);
                    $this.addClass('active');
                    $this.next().addClass('show');
                    $this.next().slideDown(350);
                }
            }
        });
    }


    // Date Counting
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');

        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<ul><li><span>%D</span><span></span></li> <li><span>%H</span><span></span></li> <li><span>%M</span><span></span></li> <li><span>%S</span><span></span></li></ul>'));
        });
    });

    // For Bootstrap Tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    // $(window).load(function() {
    //     $('#unicode-signin-up-popup').modal('show');
    // });

    //owl-carousel autoplay on off by click
    // $('.autoplay-on').on('click', function() {
    //     $owl.trigger('play.owl.autoplay', [1000])
    // })

    //owl - carousel autoplay on off by click
    // if ($(".owl-carousel").hasClass("auto-play-on")) {
    //     $owl.trigger('play.owl.autoplay', [1000])
    // }

    // Product Category toggle
    $window.on('resize load', function() {
        if ($('.owl-carousel').has('.autoplay-on')) {
            $owl.trigger('play.owl.autoplay', [1000])
        }
    });
    // For Price Range Filter Slider
    if ($('.filter_price').length) {
        $(".filter_price").slider({
            from: 0,
            to: 500,
            step: 1,
            smooth: true,
            round: 0,
            dimension: "$",
            skin: "plastic"
        });
    }

    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }


    // Fact Counter For Achivement Counting
    function factCounter() {
        if ($('.fact-counter').length) {
            $('.fact-counter .count.animated').each(function() {
                var $t = $(this),
                    n = $t.find(".count-num").attr("data-stop"),
                    r = parseInt($t.find(".count-num").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function() {
                            $t.find(".count-num").text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $t.find(".count-num").text(this.countNum);
                        }
                    });
                }

                //set skill building height
                var size = $(this).children('.progress-bar').attr('aria-valuenow');
                $(this).children('.progress-bar').css('width', size + '%');

            });
        }
    }


    // One item slide
    if ($single_carousel.length) {
        $single_carousel.owlCarousel({
            loop: false,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });
    }

    // Two item slide
    if ($two_carousel.length) {
        $two_carousel.owlCarousel({
            loop: true,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            dots: true,
            smartSpeed: 500,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                992: {
                    items: 2
                }
            }
        });
    }

    // Four item slide
    if ($three_carousel.length) {
        $three_carousel.owlCarousel({
            loop: true,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            dots: true,
            smartSpeed: 500,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                }
            }
        });
    }

    // Four item slide
    if ($four_carousel.length) {
        $four_carousel.owlCarousel({
            loop: true,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            dots: true,
            smartSpeed: 500,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
    }

    // Six item slide
    if ($six_carousel.length) {
        $six_carousel.owlCarousel({
            loop: true,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><span class='icon prev-icon'></span><span class='text prev-text'></span></div>", "<div class='nav-btn next-slide'><span class='text next-text'></span><span class='icon next-icon'></span></div>"],
            dots: true,
            smartSpeed: 500,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1300: {
                    items: 6
                }
            }
        });
    }

    // Start When document is Scrollig, do
    $window.on('scroll', function() {
        headerStyle();
        factCounter();
    });


})(jQuery);