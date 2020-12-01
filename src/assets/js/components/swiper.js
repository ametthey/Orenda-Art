// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const carouselNormal = document.querySelectorAll('.container-carousel');
const swiperContainersHero = document.querySelectorAll('.hero');

let swiperSettings = {
    directon: 'vertical',
    // loop: true,
    speed: 900,
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
};

carouselNormal.forEach( ( container ) => {
    let mySwiperFull = new Swiper( '.full', swiperSettings);
});


swiperContainersHero.forEach( ( container ) => {
    let myHeroSwiper = new Swiper( '.hero', swiperSettings );
});



