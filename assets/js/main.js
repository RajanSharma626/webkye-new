(function ($) {
    'use strict';

    jQuery(document).on('ready', function () {

        // -------- Toggle small devices menu
        const dropdownIcon = document.querySelectorAll(".dropdown__container")
        const dropdownMenu = document.querySelectorAll(".dropdown__container_menu")
        dropdownIcon.forEach((ele, index) => {
            ele.addEventListener("click", () => {
                console.log("click")
                dropdownMenu.forEach((ele, id) => {
                    if (index === id) {
                        ele.classList.toggle("dropdown__container_menu-active")
                    }
                })
            })
        })

        const menuIcon = document.querySelector(".menu__icon");
        const bottomNavbar = document.querySelector(".header__bottom_navbar")
        menuIcon.addEventListener("click", () => {
            bottomNavbar.classList.toggle("header__bottom_navbar-active")
        })
        // -------- Toggle small devices menu


        // ---------- Fixed header top on scroll

        $(window).scroll(function () {
            var height = $(window).scrollTop();
            if (height > 100) {
                $(".header__bottom").addClass("fixed__header")
            } else {
                $(".header__bottom").removeClass("fixed__header")
            }
        });

        // ---------- Fixed header top on scroll





        $('.testimonial__slides').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,
                    }
                }
            ],
            customPaging: function (slider, i) {
                var thumb = $(slider.$slides[i]).find('.slider-nav');
                return thumb;
            }
        });


        // ------ Popup for video 
        $('.video_icon').magnificPopup({
            type: 'iframe',
            callbacks: {

            }
        });

        // ------ aos animation
        AOS.init()



    })

})(jQuery);



