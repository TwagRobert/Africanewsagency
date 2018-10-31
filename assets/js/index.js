$("#search-toggle").click(function() {
    $("#search-div").slideToggle();
});
$("#menu-trigger").click(function() {
    $("#header-menu-mobile").slideToggle();
});
$('.slider').slick({
    dots:true,
    arrows:false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
});
$(document).ready(function() {
  $('.fancybox').fancybox({
    padding   : 0,
    maxWidth  : '100%',
    maxHeight : '100%',
    width   : '70%',
    height    : '70%',
    autoSize  : true,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
  });
});
function myFunction() {
    $('img').bind('contextmenu', function(e) {
        return false;
    }); 
}


