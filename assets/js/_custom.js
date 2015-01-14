/* 20150114 - added scrolling easing from another theme */
/*
$(function() {
    //$('a.page-scroll').bind('click', function(event) {
    $('.navbar-fixed-top > a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
*/

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
/*
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
*/

//$('#events').localScroll();
