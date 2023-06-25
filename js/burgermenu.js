$(document).ready(function() {
    $('.menu-burger__header').click(function() {
        $('.menu-burger__header').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
        $('.header__nav').toggleClass('open-menu');
    });
});