import 'lazysizes';
import './components/swiper.js';


// Hamburger Menu
// https://jonsuh.com/hamburgers/
const hamburgerButton = document.querySelector('button.hamburger');
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

