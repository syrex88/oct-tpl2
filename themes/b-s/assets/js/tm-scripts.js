function include(scriptUrl) {
    document.write('<script src="/themes/b-s/assets/' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/* cookie.JS
 ========================================================*/
include('js/jquery.cookie.js');

/* Easing library
 ========================================================*/
include('js/jquery.easing.1.3.js');

/* icheck.JS
 ========================================================*/
include('js/icheck.js');

/* jquery-ui.JS
 ========================================================*/
include('js/jquery-ui.js');

include('js/jquery-ui-slider-pips.js');

include('js/jquery.magnific-popup.min.js');


/* Stick up menus  ========================================================*/

include('js/pure-mask.js');

;(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('js/tmstickup.js');

        $(document).ready(function () {
            $('#stuck_container').TMStickUp({})
        });
    }
})(jQuery);

/* ToTop
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('js/jquery.ui.totop.js');

        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa fa-angle-up'
            });
        });
    }
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('js/jquery.equalheights.js');
    }
})(jQuery);


/* Copyright Year
 ========================================================*/
;
(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);


;
(function ($) {
    function include(url) {
        document.write('<script src="js/' + url + '"></script>');
        return false;
    }
})(jQuery);


/* Responsive Tabs
 ========================================================*/
;
(function ($) {
    var o = $('.resp-tabs');
    if (o.length > 0) {
        include('js/jquery.responsive.tabs.js');
        $(document).ready(function () {
            o.easyResponsiveTabs();
        });
    }
})(jQuery);


/**
 * @module       RD Navbar
 * @description  Enables RD Navbar Plugin
 */
;
(function ($) {
    var o = $('.rd-navbar');
    if (o.length > 0) {
        include('js/jquery.rd-navbar.min.js');
        $(document).ready(function () {
            o.RDNavbar({
                stuckWidth: 768,
                stuckMorph: true,
                stuckLayout: "rd-navbar-static",
                onepage: {
                    enable: false,
                    offset: 0,
                    speed: 400
                },
                responsive: {
                    0: {
                        layout: 'rd-navbar-fixed',
                        focusOnHover: false
                    },
                    1200: {
                        layout: 'rd-navbar-static'
                    }
                }
            });
        });
    }
})(jQuery);


/* PointerEvents
 ========================================================*/
;
(function ($) {
    if (isIE() && isIE() < 11) {
        include('js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function () {
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);

/* Stacktable
 ========================================================*/
;
(function ($) {
    var o = $('.table1');
    if (o.length > 0) {
        include('js/stacktable.js');
        $(document).ready(function () {
            o.stacktable();
        });
    }
})(jQuery);

/* Google Map
 ========================================================*/
;
(function ($) {
    var o = document.getElementById("google-map");
    if (o) {
        include('//maps.google.com/maps/api/js?sensor=false');
        include('js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({
                    styles: []
                });
            }
        });
    }
})
(jQuery);

/* Owl carousel
 ========================================================*/
;
(function ($) {
    var o = $('.owl-carousel');
    include('js/owl.carousel.min.js');
    if (o.length) {

        var isTouch = "ontouchstart" in window;

        function preventScroll(e) {
            e.preventDefault();
        }

        $(document).ready(function () {
            o.each(function () {
                var c = $(this),
                    responsive = {};

                var aliaces = ["-", "-xs-", "-sm-", "-md-", "-lg-"],
                    values = [0, 480, 768, 992, 1200],
                    i, j;

                for (i = 0; i < values.length; i++) {
                    responsive[values[i]] = {};
                    for (j = i; j >= -1; j--) {
                        if (!responsive[values[i]]["items"] && c.attr("data" + aliaces[j] + "items")) {
                            responsive[values[i]]["items"] = j < 0 ? 1 : parseInt(c.attr("data" + aliaces[j] + "items"));
                        }
                        if (!responsive[values[i]]["stagePadding"] && responsive[values[i]]["stagePadding"] !== 0 && c.attr("data" + aliaces[j] + "stage-padding")) {
                            responsive[values[i]]["stagePadding"] = j < 0 ? 0 : parseInt(c.attr("data" + aliaces[j] + "stage-padding"));
                        }
                        if (!responsive[values[i]]["margin"] && responsive[values[i]]["margin"] !== 0 && c.attr("data" + aliaces[j] + "margin")) {
                            responsive[values[i]]["margin"] = j < 0 ? 30 : parseInt(c.attr("data" + aliaces[j] + "margin"));
                        }
                    }
                }

                c.owlCarousel({
                    autoplay: c.attr("data-autoplay") === "true",
                    loop: c.attr("data-loop") !== "false",
                    items: 1,
                    mouseDrag: c.attr("data-mouse-drag") !== "false",
                    nav: c.attr("data-nav") === "true",
                    dots: c.attr("data-dots") === "true",
                    dotsEach: c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each")) : false,
                    responsive: responsive,
                    navText: [],
                    onInitialized: function () {
                        if ($.fn.magnificPopup) {
                            var o = this.$element.attr('data-lightbox') !== undefined && this.$element.attr("data-lightbox") !== "gallery",
                                g = this.$element.attr('data-lightbox') === "gallery";

                            if (o) {
                                this.$element.each(function () {
                                    var $this = $(this);
                                    $this.magnificPopup({
                                        type: $this.attr("data-lightbox"),
                                        callbacks: {
                                            open: function () {
                                                if (isTouch) {
                                                    $(document).on("touchmove", preventScroll);
                                                    $(document).swipe({
                                                        swipeDown: function () {
                                                            $.magnificPopup.close();
                                                        }
                                                    });
                                                }
                                            },
                                            close: function () {
                                                if (isTouch) {
                                                    $(document).off("touchmove", preventScroll);
                                                    $(document).swipe("destroy");
                                                }
                                            }
                                        }
                                    });
                                })
                            }

                            if (g) {
                                this.$element.each(function () {
                                    var $gallery = $(this);

                                    $gallery
                                        .find('[data-lightbox]').each(function () {
                                        var $item = $(this);
                                        $item.addClass("mfp-" + $item.attr("data-lightbox"));
                                    })
                                        .end()
                                        .magnificPopup({
                                            delegate: '.owl-item [data-lightbox]',
                                            type: "image",
                                            gallery: {
                                                enabled: true
                                            },
                                            callbacks: {
                                                open: function () {
                                                    if (isTouch) {
                                                        $(document).on("touchmove", preventScroll);
                                                        $(document).swipe({
                                                            swipeDown: function () {
                                                                $.magnificPopup.close();
                                                            }
                                                        });
                                                    }
                                                },
                                                close: function () {
                                                    if (isTouch) {
                                                        $(document).off("touchmove", preventScroll);
                                                        $(document).swipe("destroy");
                                                    }
                                                }
                                            }
                                        });
                                })
                            }
                        }
                    }
                });
            });
        });
    }
})(jQuery);


/* WOW
 ========================================================*/
;
(function ($) {
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include('js/wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
})(jQuery);


/* Orientation tablet fix
 ========================================================*/
$(function () {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');


/* Search.js
 ========================================================*/
;
(function ($) {
    var o = $('.search-form');
    if (o.length > 0) {
        include('js/TMSearch.js');
    }
})(jQuery);


/**
 * @module     RD Input Label
 * @description Enables RD Input Label Plugin
 */
;
(function ($) {
    var o = $('.form-label');
    if (o.length) {
        include('js/mailform/jquery.rd-input-label.js');

        $(document).ready(function () {
            o.RDInputLabel();
        });
    }
})(jQuery);

/* Mailform
 =============================================*/
;
(function ($) {
    var o = $('.rd-mailform');
    if (o.length > 0) {
        include('js/mailform/jquery.form.min.js');
        include('js/mailform/jquery.rd-mailform.min.js');

        $(document).ready(function () {
            var o = $('.rd-mailform');

            if (o.length) {
                o.rdMailForm({
                    validator: {
                        'constraints': {
                            '@LettersOnly': {
                                message: 'Используйте только буквы!'
                            },
                            '@NumbersOnly': {
                                message: 'Используйте только числа!'
                            },
                            '@NotEmpty': {
                                message: 'Поле обязательно для заполнения!'
                            },
                            '@Email': {
                                message: 'E-mail введён некорректно!'
                            },
                            '@Phone': {
                                message: 'Номер телефона введён некорректно!'
                            },
                            '@Date': {
                                message: 'Use MM/DD/YYYY format!'
                            },
                            '@SelectRequired': {
                                message: 'Please choose an option!'
                            }
                        }
                    }
                }, {
                    'MF000': 'Sent',
                    'MF001': 'Recipients are not set!',
                    'MF002': 'Form will not work locally!',
                    'MF003': 'Please, define email field in your form!',
                    'MF004': 'Please, define type of your form!',
                    'MF254': 'Something went wrong with PHPMailer!',
                    'MF255': 'There was an error submitting the form!'
                });
            }
        });
    }
})(jQuery);


/* Touch Touch Gallery
 =============================================*/
;
(function ($) {
    var o = $('.thumb');
    if (o.length > 0) {
        include('js/jquery.touch-touch.js');

        $(document).ready(function () {
            o.touchTouch();
        });
    }
})(jQuery);


/* Menu Trigger
 =============================================*/
// $(document).ready(function () {
//     $('body').delegate('.trig','click', function (e) {
//         var $this = $(this);
//         e.preventDefault();
//         $this.parents('.stuck_container').find('.sf-menu').toggleClass('active-menu');
//         $this.parents('.stuck_container').find('.trig').toggleClass('trig-active');
//     });

//     $(document).on('click', function (e) {
//         var container = $("nav");
//         if (!container.is(e.target)
//             && container.has(e.target).length === 0 && container.find('.trig').hasClass('trig-active')) {
//             container.find('.trig-active').removeClass('trig-active').parent().find('.active-menu').removeClass('active-menu');
//         }
//     })

// })


/* Cross rotate
 ============================================*/

$(document).ready(function () {
    $(".cross").mouseenter(function () {
        $(this).addClass('cross-active');
        var test = $(this);
        setTimeout(function () {
            test.removeClass('cross-active')
        }, 1300);


    });
});


/**
 * @module       Isotope
 * @description  Enables Isotope Plugin
 */
;
(function ($) {
    var o = $(".isotope");
    if (o.length) {
        include('js/isotope.pkgd.min.js');

        $(document).ready(function () {
            o.each(function () {
                var _this = this
                    , iso = new Isotope(_this, {
                    itemSelector: '[class*="col-"], .isotope-item',
                    layoutMode: _this.getAttribute('data-layout') ? _this.getAttribute('data-layout') : 'masonry'
                });

                $(window).on("resize", function () {
                    iso.layout();
                });

                $(window).load(function () {
                    iso.layout();
                    setTimeout(function () {
                        _this.className += " isotope--loaded";
                        iso.layout();
                    }, 600);
                });
            });

            $(".isotope-filters-trigger").on("click", function () {
                $(this).parents(".isotope-filters").toggleClass("active");
            });

            $("[data-isotope-filter]").on("click", function () {
                $('[data-isotope-filter][data-isotope-group="' + this.getAttribute("data-isotope-group") + '"]').removeClass("active");
                $(this).addClass("active");
                $(this).parents(".isotope-filters").removeClass("active");
                $('.isotope[data-isotope-group="' + this.getAttribute("data-isotope-group") + '"]')
                    .isotope({filter: this.getAttribute("data-isotope-filter") == '*' ? '*' : '[data-filter="' + this.getAttribute("data-isotope-filter") + '"]'});
            })
        });
    }
})(jQuery);


/**
 * @module       Swiper Slider
 * @description  Enables Swiper Plugin
 */
;
(function ($, undefined) {
    var o = $(".swiper-slider");
    if (o.length) {
        include('js/jquery.swiper.min.js');

        function getSwiperHeight(object, attr) {
            var val = object.attr("data-" + attr),
                dim;

            if (!val) {
                return undefined;
            }

            dim = val.match(/(px)|(%)|(vh)$/i);

            if (dim.length) {
                switch (dim[0]) {
                    case "px":
                        return parseFloat(val);
                    case "vh":
                        return $(window).height() * (parseFloat(val) / 100);
                    case "%":
                        return object.width() * (parseFloat(val) / 100);
                }
            } else {
                return undefined;
            }
        }

        function toggleSwiperInnerVideos(swiper) {
            var videos;

            $.grep(swiper.slides, function (element, index) {
                var $slide = $(element),
                    video;

                if (index === swiper.activeIndex) {
                    videos = $slide.find("video");
                    if (videos.length) {
                        videos.get(0).play();
                    }
                } else {
                    $slide.find("video").each(function () {
                        this.pause();
                    });
                }
            });
        }

        function toggleSwiperCaptionAnimation(swiper) {
            if (isIE() && isIE() < 10) {
                return;
            }

            var prevSlide = $(swiper.container),
                nextSlide = $(swiper.slides[swiper.activeIndex]);

            prevSlide
                .find("[data-caption-animate]")
                .each(function () {
                    var $this = $(this);
                    $this
                        .removeClass("animated")
                        .removeClass($this.attr("data-caption-animate"))
                        .addClass("not-animated");
                });

            nextSlide
                .find("[data-caption-animate]")
                .each(function () {
                    var $this = $(this),
                        delay = $this.attr("data-caption-delay");

                    setTimeout(function () {
                        $this
                            .removeClass("not-animated")
                            .addClass($this.attr("data-caption-animate"))
                            .addClass("animated");
                    }, delay ? parseInt(delay) : 0);
                });
        }

        $(document).ready(function () {
            o.each(function () {
                var s = $(this);

                var pag = s.find(".swiper-pagination"),
                    next = s.find(".swiper-button-next"),
                    prev = s.find(".swiper-button-prev"),
                    bar = s.find(".swiper-scrollbar"),
                    h = getSwiperHeight(o, "height"), mh = getSwiperHeight(o, "min-height");
                s.find(".swiper-slide")
                    .each(function () {
                        var $this = $(this),
                            url;
                        if (url = $this.attr("data-slide-bg")) {
                            $this.css({
                                "background-image": "url(" + url + ")",
                                "background-size": "cover"
                            })
                        }
                    })
                    .end()
                    .find("[data-caption-animate]")
                    .addClass("not-animated")
                    .end()
                    .swiper({
                        autoplay: s.attr('data-autoplay') ? s.attr('data-autoplay') === "false" ? undefined : s.attr('data-autoplay') : 5000,
                        direction: s.attr('data-direction') ? s.attr('data-direction') : "horizontal",
                        effect: s.attr('data-slide-effect') ? s.attr('data-slide-effect') : "slide",
                        speed: s.attr('data-slide-speed') ? s.attr('data-slide-speed') : 600,
                        keyboardControl: s.attr('data-keyboard') === "true",
                        mousewheelControl: s.attr('data-mousewheel') === "true",
                        mousewheelReleaseOnEdges: s.attr('data-mousewheel-release') === "true",
                        nextButton: next.length ? next.get(0) : null,
                        prevButton: prev.length ? prev.get(0) : null,
                        pagination: pag.length ? pag.get(0) : null,
                        paginationClickable: pag.length ? pag.attr("data-clickable") !== "false" : false,
                        paginationBulletRender: pag.length ? pag.attr("data-index-bullet") === "true" ? function (index, className) {
                            return '<span class="' + className + '">' + (index + 1) + '</span>';
                        } : null : null,
                        scrollbar: bar.length ? bar.get(0) : null,
                        scrollbarDraggable: bar.length ? bar.attr("data-draggable") !== "false" : true,
                        scrollbarHide: bar.length ? bar.attr("data-draggable") === "false" : false,
                        loop: s.attr('data-loop') !== "false",
                        onTransitionStart: function (swiper) {
                            toggleSwiperInnerVideos(swiper);
                        },
                        onTransitionEnd: function (swiper) {
                            toggleSwiperCaptionAnimation(swiper);
                        },
                        onInit: function (swiper) {
                            toggleSwiperInnerVideos(swiper);
                            toggleSwiperCaptionAnimation(swiper);

                            var o = $(swiper.container).find('.rd-parallax');
                            if (o.length && window.RDParallax) {
                                o.RDParallax({
                                    layerDirection: ($('html').hasClass("smoothscroll") || $('html').hasClass("smoothscroll-all")) && !isIE() ? "normal" : "inverse"
                                });
                            }
                        }
                    });

                $(window)
                    .on("resize", function () {
                        var mh = getSwiperHeight(s, "min-height"),
                            h = getSwiperHeight(s, "height");
                        if (h) {
                            s.css("height", mh ? mh > h ? mh : h : h);
                        }
                    })
                    .load(function () {
                        s.find("video").each(function () {
                            if (!$(this).parents(".swiper-slide-active").length) {
                                this.pause();
                            }
                        });
                    })
                    .trigger("resize");
            });
        });
    }
})(jQuery);


/* Parallax
 =============================================*/
;
(function ($) {
    include('js/jquery.rd-parallax.js');
})(jQuery);


/* JQuery UI Accordion
 ========================================================*/
;
(function ($) {
    var o = $('.accordion');
    if (o.length > 0) {
        include('js/jquery.ui.accordion.min.js');

        $(document).ready(function () {
            o.accordion({
                active: 0,
                header: '.accordion_header',
                heightStyle: 'content',
                collapsible: true
            });
        });
    }
})(jQuery);

/**
 * @module       RD Twitter Feed
 * @description  Enables RD Twitter Feed
 */
;
(function ($) {
    var o = $('.twitter');
    if (o.length > 0) {
        include('js/twitter.min.js');
        $(document).ready(function () {
            o.RDTwitter({});
        });
    }
})(jQuery);

/* Vide
 =============================================*/
$(document).ready(function () {
    var $this = $('.vide_bg1');
    $this.addClass('vide-played');

    $(".play-btn").on("click", function (e) {

        e.preventDefault();
        if ($this.hasClass('vide-paused')) {
            $this.find("video")[0].play();
            $this.removeClass('vide-paused').addClass('vide-played');
        } else {
            $this.find("video")[0].pause();
            $this.removeClass('vide-played').addClass('vide-paused');
        }
    });

});

$(document).ready(function () {
    var saveCalculate = false
    var calculateSumm = function (ndsType, colDocs) {
        var value
        var ndsValue
        colDocs = parseInt(colDocs)
        if (ndsType === 'Общая') {
            if (colDocs <= 300) {
                ndsValue = 65
            }
            if (colDocs <= 200) {
                ndsValue = 70
            }
            if (colDocs <= 100) {
                ndsValue = 90
            }
        }
        if (ndsType === 'УСН') {
            if (colDocs <= 300) {
                ndsValue = 45
            }
            if (colDocs <= 200) {
                ndsValue = 55
            }
            if (colDocs <= 100) {
                ndsValue = 70
            }
        }
        value = ndsValue * parseInt(colDocs)
        $('.cost-value').html(value)
        if (saveCalculate) {
            var text = 'Тип:' + ndsType;
            text += '; Стоимость НДС:' + ndsValue;
            text += '; Кол-во документов:' + colDocs;
            text += '; Итого:' + value;
            $('#calculateData').val(text)
            console.log(text)
        }
    }

    var ndsType = $("[name=nds]").val();
    var sliderValue = 50
    calculateSumm(ndsType, sliderValue)
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat-grey'
    });
    $('input').on('ifChanged', function (event) {
        $(event.target).trigger('change');
    });
    $('input').on('ifClicked', function (ev) {
        $(ev.target).click()
    })

    $("[name=nds]").change(function () {
        ndsType = this.value
        calculateSumm(ndsType, sliderValue)
    })
    $(".slider").slider({min: 10, max: 300, step: 10})
        .slider("pips", {rest: "label", suffix: "&nbsp;шт."})
        .slider("value", 50)
        .slider("float").slider({
        change: function (event, ui) {
            $("#slider-value").val(ui.value);
            sliderValue = ui.value
            calculateSumm(ndsType, sliderValue)
        }
    });

    $(".cost-button").click(function () {
        saveCalculate = true
        calculateSumm(ndsType, sliderValue)
    })

    $('.popup-button').magnificPopup({
        type: 'inline',
        fixedContentPos: true,
        fixedBgPos: true,
        overflowY: false,
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    PureMask.format('.def [name=phone]', true);
    PureMask.format('.footer  [name=phone]', true);
    PureMask.format('.popup [name=phone]', true);
});