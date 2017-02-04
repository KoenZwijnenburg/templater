$('.hamburger-menu').click(function() {
   $('nav').show().animate({
       width:'80%'
   }, 240);
});

$('.has-children').click(function() {
   $(this).find('ul').toggle();
});