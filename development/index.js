
$(document).ready(function () {
  $('.bg-img').each(function() {
    $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
});
  $(window).on("load resize scroll",function(e){
    if ($(window).width() < 991) {
       $('.contact-nav').appendTo('.main-nav');
       $('.left-box').appendTo('.main-nav');
   }
   else {
       $('.contact-nav').appendTo('#header .right-box');
       $('#header .left-box').prependTo('#header .header-box');
   }
});
  

  $('<a href="#" class="open-menu"><span></span>Open Menu</a>').appendTo('#header .container');
  $('<span class="fader"/>').appendTo('body');
  $('.open-menu').click(function(){
    $('body').toggleClass('menu-opened');
    return false;
    });//btn-open-manu

  $('.search-contact-box .seacrh-btn').click(function(){
    $('body').toggleClass('search-opened');
    
    return false;
    });//btn-open-manu
  $('.fader').click(function(){
    $('body').removeClass('search-opened');
});
  $('.director-list--item .info').matchHeight();
})
