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


// Get Instagram Followers Count with Account URL
const getInstagramURL = document.querySelector('.instagram-url').getAttribute('href');
let instagramURLSelection =  getInstagramURL.substr(0, getInstagramURL.lastIndexOf("/"));


const instagramAccount = `https://www.instagram.com/romain.vicari/?__a=1`;
let instagramCount = document.querySelector('.instagram-count');


// /wp-json/wp/v2/clients

fetch( instagramAccount )
    .then( response => {
        if ( response.status !== 200 ) {
            console.log(`Problème ! Le status du code est ${response.status}`)
            return;
        } else {
            // Fetch API to get posts
            response.json().then( (instagram) => {
                console.log(instagram);
                let getInstagramCount = instagram.graphql.user.edge_followed_by.count;

                instagramCount.innerHTML = getInstagramCount;
            });
        }
    })
    .catch( error => {
        console.log(`Error: ${error}`);
    });

