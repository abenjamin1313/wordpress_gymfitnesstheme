jQuery(document).ready(function($) {
    // Make the menu responsive
    $('#main_id').slicknav();
    // Run bxSlider on testimonals
    $('.testimonials-list').bxSlider({
        controls: true,
        mode: 'fade',
        speed: 500
    });

    // When the page is ready add the fixxed menu if position is greater than 300px;
    const headerScroll = document.querySelector('.navigation-bar');
    const rect = headerScroll.getBoundingClientRect();
    const topDistance = Math.abs(rect.top);
    fixedMenu(topDistance);
});

window.onscroll = () => {
    let scroll = window.scrollY;
    fixedMenu(scroll);

}

// Adds a fixed menu on top
function fixedMenu(scroll) {
    const headerScroll = document.querySelector('.navigation-bar');
    const documentBody = document.querySelector('body');

    // In the case that the scroll is greater than 300 add some classes
    if(scroll > 300) {
        headerScroll.classList.add('fixed-top');
    } else {
        headerScroll.classList.remove('fixed-top');
    }
}