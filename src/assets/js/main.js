import 'lazysizes';
import './components/swiper.js';
import './components/back-to-top.js';


// Hamburger Menu
// https://jonsuh.com/hamburgers/
const hamburgerButton = document.querySelector('.hamburger');
const navigationMobile = document.querySelector('#site-navigation-mobile');
const content = document.querySelector('#content');
const headerLogo = document.querySelector('.site-branding');

if ( hamburgerButton ) {
    hamburgerButton.addEventListener('click', () => {
        hamburgerButton.classList.toggle('is-active');
        navigationMobile.classList.toggle('is-active');

        content.classList.toggle('have-opacity-down');
        headerLogo.classList.toggle('have-opacity-down');
    });
}

// Artist single page -> add artist menu active
const singleArtist = document.querySelector('.single-artiste');
let menuArtist = document.querySelector('.menu-item-30');

if ( singleArtist ) {
    menuArtist.classList.add('current-menu-item');
}


// read more
// https://github.com/jedfoster/Readmore.js/tree/version-3.0
import Readmore from 'readmore-js';

// Press
const readMoreParagraphs = document.querySelectorAll('.item-texte');

new Readmore( readMoreParagraphs, {
    speed: 200,
    collapseHeight: 20,
    lessLink: '<a href="#" class="read-more">Read less</a>',
    heightMargin: 16,
    moreLink: '<a href="#" class="read-more">Read more</a>',
});
