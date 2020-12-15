/********************************************************************
 * Back to top functionality
 * https://getflywheel.com/layout/sticky-back-to-top-button-tutorial/
 *******************************************************************/

// target the selector of back to top button
const scrollToTopButton = document.querySelector('button#button__top');

// Function to make the page go up to to the top
const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
    if (c > 0) {
        window.scrollToTop;
        window.scrollTo(0, c - c / 0.5);
    }
};

// if button exist, execute the function
if ( scrollToTopButton ) {
    scrollToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('back to top');
        scrollToTop();
    });

    //
    // scrollToTopButton.onclick = function(e) {
    //     e.preventDefault();
    //     console.log('back to top');
    //     scrollToTop();
    // }
}
