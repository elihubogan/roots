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
/*
$('body').scrollspy({
    target: '.navbar-fixed-top'
});
*/

// Closes the Responsive Menu on Menu Item Click
/*
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
*/

//$('#events').localScroll();
//
$(window).bind("load", function() {
   window.scrollTo = function (selector) {
        if (selector === '') { return; }

        return $('html, body').animate({
            scrollTop: $('#' + selector).offset().top - 250 
        //}, 'slow');
        }, 1500, 'easeInOutCirc');

    };
    $(document).ready(function () {
        scrollTo(window.location.hash.replace(/^\#/, ''));
    }); 
    $.localScroll({
        offset: -250,
        easing: 'easeInOutCirc'
    });
});
