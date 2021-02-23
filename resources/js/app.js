// require('./bootstrap');
// import 'bootstrap';
// var $ = require( "jquery" );
// require( "slick-slider" );
// require( "select2" );

// Global vars

window.win = $(window);
window.doc = $(document);
window.winH = window.win.height();
window.winW = window.win.width();


/**
 * Main site object
 */

var site = {

    init: function() {
        this.slickSlider();
        this.customSelect();
        this.textEllipsis();
        this.swiper();
        this.dropdownAnimation();
        // this.mobileMenu();
        // this.closeMobilMenu();
    },

    /*
     * dropdown animation
     */
    dropdownAnimation: function() {
        $('.dropdown').on('show.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
        });
    
        // Add slideUp animation to Bootstrap dropdown when collapsing.
        $('.dropdown').on('hide.bs.dropdown', function() {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
        });
    },


    /*
     * slick slider
     */
    slickSlider: function() {
        if($('.slick-slider').length > 0) {
            var sliders = $('.slick-slider');
            sliders.each(function() {                
                var slider = $(this);
                
                slider.on('init', function () {
                    if (slider.hasClass('invisible')) {
                        slider.removeClass('invisible');
                    }
                });
                slider.slick({
                    infinite: true,
                    slidesToShow: slider.data("slidestoshow"),
                    slidesToScroll: slider.data("slidestoscroll"),
                    arrows: slider.data("arrows"),
                    dots: slider.data("dots"),
                    centerMode: slider.data("center"),
                    prevArrow: '<i class="icon-arrow-left slick-prev"></i>',
                    nextArrow: '<i class="icon-arrow-right slick-next"></i>',
                    // responsive: [
                    //     {
                    //         breakpoint: 960,
                    //         settings: {
                    //           slidesToShow: 1,
                    //           slidesToScroll: 1
                    //         }
                    //       },
                    //     {
                    //       breakpoint: 768,
                    //       settings: {
                    //         slidesToShow: 2,
                    //         slidesToScroll: 2
                    //       }
                    //     },
                    //     {
                    //         breakpoint: 576,
                    //         settings: {
                    //             slidesToShow: 1,
                    //             slidesToScroll: 1
                    //         }
                    //     }
                    // ]
                });
            });
        } 
    },

    /*
     * swiper
     */
    swiper: function() {
        if($('.scroll-slider .swiper-container').length > 0) {
            var sliders = $('.scroll-slider .swiper-container');
            sliders.each(function() {                
                var slider = this;

                const swiper = new Swiper(slider, {
                    // slidesPerView: 3,
                    slidesPerView: 'auto',
                    spaceBetween: 30,
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        // hide: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    // slidesPerGroup: 3,
                    // loop: true,
                    // loopFillGroupWithBlank: true,
                    // Responsive breakpoints
                    breakpoints: {
                        // when window width is >= 320px
                        // 320: {
                        //     slidesPerView: 1,
                        //     spaceBetween: 20,
                        //     slidesPerGroup: 1
                        // },
                        // when window width is >= 480px
                        // 480: {
                        //     slidesPerView: 2,
                        //     spaceBetween: 20,
                        //     slidesPerGroup: 2,
                        // },
                        // // when window width is >= 640px
                        // 640: {
                        //     slidesPerView: 2,
                        //     slidesPerGroup: 2
                        // }
                    }
                });
            });
        } 
    },

     /*
     * select 2
     */
    customSelect: function() {
        if($('.js-custom-select').length > 0) {
            var select = $('.js-custom-select');

            var placeholder = select.data("placeholder");
            var closeOnSelect = select.data("close");

            select.each(function() {
                var select = $(this);
                select.select2({
                    placeholder: placeholder,
                    closeOnSelect: closeOnSelect
                });
            }).on('select2:open', function () {
                var a = $(this).data('select2');
                if (!closeOnSelect) {
                    a.$results.parents('.select2-results').addClass('has-close-btn')
                        .append('<div class="select2-link2 select2-close w--120"><button class="btn btn--pink w--100">Kész</button></div>')
                        .find('.select2-close > button')
                        .on('click', function (b) {
                            a.trigger('close');
                    });
                }
            });
        }
    },

    /*
     * text ellipsis
     */
    textEllipsis: function() {
        if($('.js-text-ellipsis').length > 0) {
            var text = $('.js-text-ellipsis');
            var row = text.data('row');
            text.each(function() {
                var text = $(this);
                text.ellipsis({
                    row: row
                });
            });
        }
    },

    /*
     * mobile menu
     */
    // mobileMenu: function() {
    //     if($('#mobile-menu').length > 0) {
    //         var btn = $('#mobile-menu');
    //         btn.click(function() {
    //             $('body').toggleClass('fixed');
    //             $('#site-header .header-nav').toggleClass('opened');
    //             if($('body').hasClass('fixed')) {
    //                 $('#site-header').append('<div id="mask"></div>');

    //                 $('#mask').click(function() {
    //                     $('body').removeClass('fixed');
    //                     $('#site-header .header-nav').removeClass('opened');
    //                     $('#mask').remove();
    //                 });
    //             } else {
    //                 $('#mask').remove();
    //             }
    //         });
    //     }
    // },

    /*
     * mobile menu
     */
    // closeMobilMenu: function() {
    //     if($('#close-mobile-menu-btn').length > 0) {
    //         var btn = $('#close-mobile-menu-btn');
    //         btn.click(function() {
    //             $('body').removeClass('fixed');
    //             $('#site-header .header-nav').removeClass('opened');
    //             $('#mask').remove();
    //         });
    //     }
    // }

};

/****************************** DOM READY EVENT ******************************/

window.doc.ready(function() {

    site.init();


});

/****************************** ONLOAD EVENT ******************************/

window.win.on('load', function() {

});

/****************************** SCROLL EVENT ******************************/

window.win.bind('scroll', function() {



});


/****************************** RESIZE EVENT ******************************/

window.win.resize(function() {


    window.winH = window.win.height();
    window.winW = window.win.width();

    site.textEllipsis();


});


