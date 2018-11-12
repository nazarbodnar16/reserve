
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
  $('.lidership-list--item .top-info').matchHeight();
})



$('.main-nav li').each(function(){
    if ($(this).find('.sub-menu').length){
      $(this).prepend('<span class="opener"></span>');
      $(this).addClass('dropdown');
    }
  });//main-nav-dropdown

  $('.main-nav .opener').click(function(){
    if ($(this).parent().hasClass('opened')) {
      $(this).parent().removeClass('opened');
      $(this).siblings('.sub-menu').stop().slideUp(300);
    } else{
      $(this).parent().addClass('opened').siblings('.opened').removeClass('opened').children('.sub-menu').stop().slideUp(300);
      $(this).siblings('.sub-menu').stop().slideDown(300);
    };
    return false;
  });//main-nav-accordion
