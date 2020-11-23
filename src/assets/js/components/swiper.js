// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const carouselThumbnail = document.querySelectorAll('.carousel-thumbnails');
const swiperContainersHero = document.querySelectorAll('.swiper-container');

let swiperSettings = {
    directon: 'vertical',
    loop: true,
    speed: 900,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
};

carouselThumbnail.forEach( ( container ) => {
    let mySwiperFull = new Swiper( '.full', {
        direction: 'horizontal',
        loop: true,
        speed: 900,

        thumbs: {
            swiper: mySwiperThumbs
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
    let mySwiperThumbs = new Swiper( '.thumb', {
        loop: true,
        direction: 'horizontal',
        spaceBetween: 4,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true
    });
});


swiperContainersHero.forEach( ( container ) => {
    let myHeroSwiper = new Swiper( '.swiper-container', swiperSettings );
    console.log(container);
});



