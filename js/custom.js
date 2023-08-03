(function () {
  'use strict'

  document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
    document.querySelector('.offcanvas-collapse').classList.toggle('open')
  })
})()

$(window).on('load', function () {
  $('img').attr('loading', 'lazy');
}) 

$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });

      $('.left-menu-switch').on('click', function(e) {
        $('.side-menu').toggle(300);
        e.preventDefault();
      });

});

  $('#p-1').countdown({
    date: '08/10/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-1').text("Product is now live");
  });

  $('#p-2').countdown({
    date: '08/12/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-2').text("Product is now live");
  });

  $('#p-3').countdown({
    date: '08/13/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-3').text("Product is now live");
  });

  $('#p-4').countdown({
    date: '08/14/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-4').text("Product is now live");
  });

  $('#p-5').countdown({
    date: '08/15/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-5').text("Product is now live");
  });

  $('#p-6').countdown({
    date: '08/12/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-6').text("Product is now live");
  });

  $('#p-7').countdown({
    date: '08/13/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-7').text("Product is now live");
  });

  $('#p-8').countdown({
    date: '08/14/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-8').text("Product is now live");
  });

  $('#p-9').countdown({
    date: '08/15/2021 23:59:59',
    offset: +6,
    day: 'Day',
    days: 'Days'
  }, function () {
    $('#p-9').text("Product is now live");
  });


/* ELEVATEZOOM JS  */
    jQuery("#zoom1").elevateZoom({
      gallery: 'gallery_01',
      responsive: true,
      cursor: 'pointer',
      galleryActiveClass: "active",
      imageCrossfade: true
    }); 
  
    
    /* BXSLIDER JS  */
    jQuery('.bxslider').bxSlider({
      slideWidth: 83,
      slideMargin: 10,
      minSlides: 3,
      maxSlides: 4,
      pager: false,
      speed: 500,
      pause: 3000,
      adaptiveHeight: false
    });