$(window).load(function() {
    $(".se-pre-con").fadeOut("slow");
  });

$(document).ready(function(){

$(function() {
      $('.smoothscroll').click(function() {
        var id = $(this).attr('href');
        $('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
        // Prevent default behavior of link
        return false;
      });
    });

var $grid = $('.masonry-grid').masonry({
  // options
  itemSelector: '.masonry-item',
  columnWidth: 0
});

$grid.imagesLoaded().progress( function() {
  $grid.masonry('layout');
});

$("#start").waypoint(function() {
  $('header').toggleClass("header-scrolled");
  $('#name').toggleClass("faded");
}, { offset: 143
});

$('#nav-toggle').click(function() {
    $('nav').toggleClass("nav-visible");
    $(this).toggleClass("nav-toggle-x");
  }); 

//responsive videos (inside document ready function)
$(".fitvid-container").fitVids();

$('#branding-link').click(function() {
    $(this).css("background", "red");
    $('.project-branding').show('display', 'block');
    $('.project-branding').siblings().css('display', 'none');
  }); 

// auto runt control
jQuery(function($) {
    $('h1,h2,h3,li,p').not(".wpcf7 p").each(function() {
        $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
    });
});

});

