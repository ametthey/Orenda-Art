// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const carouselThumbnail = document.querySelectorAll('.container-home-introduction');
const swiperContainersHero = document.querySelectorAll('.hero');

let swiperSettings = {
    directon: 'vertical',
    loop: true,
    speed: 900,
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
};

carouselThumbnail.forEach( ( container ) => {
    let mySwiperThumbs = new Swiper( '.thumb', {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    let mySwiperFull = new Swiper( '.full', {
        speed: 900,
        spaceBetween: 10,
        slidesPerView: 1,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // thumbs: {
        //     swiper: mySwiperThumbs
        // },

    });
});


swiperContainersHero.forEach( ( container ) => {
    let myHeroSwiper = new Swiper( '.hero', swiperSettings );
    console.log(container);
});



