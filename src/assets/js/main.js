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
