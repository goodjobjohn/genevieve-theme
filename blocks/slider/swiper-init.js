// SWIPER

// Params
var sliderSelector = ".swiper-container";
var options = {
    // init: false,
    autoplay: {
        delay: 5000,
    },
    loop: true,
    speed: 500,
    slidesPerView: 1, // or 'auto'
    //centerInsufficientSlides: true,
    // spaceBetween: 10,
    centeredSlides: true,
    // effect: "coverflow", // 'cube', 'fade', 'coverflow',
    // coverflowEffect: {
    //     rotate: 0, // Slide rotate in degrees
    //     stretch: 0, // Stretch space between slides (in px)
    //     depth: 500, // Depth offset in px (slides translate in Z axis)
    //     modifier: 1, // Effect multipler
    //     slideShadows: true, // Enables slides shadows
    // },
    grabCursor: true,
    parallax: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
    breakpoints: {
        1023: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
    // Events
    on: {
        imagesReady: function () {
            this.el.classList.remove("loading");
        },
    },
};

var mySwiper = new Swiper(sliderSelector, options);
// var mySwiper = new Swiper(".swiper-container");

////--- Multiple Sliders
// const myCustomSlider = document.querySelectorAll(".swiper-container");

// for (i = 0; i < myCustomSlider.length; i++) {
//     myCustomSlider[i].classList.add("swiper-container-" + i);

//     var slider = new Swiper(".swiper-container-" + i, options);
// }

// Initialize slider
// slider.init();
