$(window).load(function(){$(".se-pre-con").fadeOut("slow")}),$(document).ready(function(){$(function(){$(".smoothscroll").click(function(){var n=$(this).attr("href");return $("html,body").animate({scrollTop:$(n).offset().top},"slow"),!1})});var n=$(".masonry-grid").masonry({itemSelector:".masonry-item",columnWidth:0});n.imagesLoaded().progress(function(){n.masonry("layout")}),$("#start").waypoint(function(){$("header").toggleClass("header-scrolled"),$("#name").toggleClass("faded")},{offset:143}),$("#nav-toggle").click(function(){$("nav").toggleClass("nav-visible"),$(this).toggleClass("nav-toggle-x")}),$(".fitvid-container").fitVids(),$("#branding-link").click(function(){$(this).css("background","red"),$(".project-branding").show("display","block"),$(".project-branding").siblings().css("display","none")}),jQuery(function($){$("h1,h2,h3,li,p").not(".wpcf7 p").each(function(){$(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,"&nbsp;$1"))})})});