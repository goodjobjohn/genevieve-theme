// Initialise Carousel
const myCarousel = new Carousel(document.querySelector(".carousel"), {
    // Options
    friction: 0.96,
    slidesPerPage: 1,
    Dots: false,
});

// Customize Fancybox
Fancybox.bind('[data-fancybox="gallery"]', {
    Thumbs: false,
    Toolbar: false,

    closeButton: "top",

    Carousel: {
        on: {
            change: (that) => {
                myCarousel.slideTo(myCarousel.findPageForSlide(that.page), {
                    friction: 0,
                });
            },
        },
    },
});
