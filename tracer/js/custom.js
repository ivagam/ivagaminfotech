var a = 0;
$(window).scroll(function () {
 
});
  //


  $( document ).ready(function() {
    
  $(".app-screen .owl-carousel").owlCarousel({
    items: 1,
      loop: true,
      margin: 32,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplaySpeed: 4000,
      autoplayHoverPause: true,
    
  });
  //

  var csclCarousel = $("#cscl");

  csclCarousel.owlCarousel({
    items: 1,
    loop: true,
    nav:false,
    dots: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    touchDrag: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items:2,
      },
      1200: {
        items:3,
      },
    }

  });

  $(".csclnext").click(function () {
    csclCarousel.trigger("next.owl.carousel");
  });
  $(".csclprev").click(function () {
    csclCarousel.trigger("prev.owl.carousel");
  });

  //
  $(".testmonials .owl-carousel").owlCarousel({
    items: 1,
      loop: true,
      margin: 32,
      nav: false,
      dots: true,
      autoplay: false,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items:2,
        }
      }
    
  });
  //

  $(".faq-block").eq(0).addClass("active").children(".answer").show();
  $(".question").click(function () {
    $(".faq-block").removeClass("active");

    $(".answer").slideUp();
    if ($(this).next(".answer").is(":hidden")) {
      $(this).next(".answer").slideDown();
      $(this).parents(".faq-block").addClass("active");
    } else {
      $(this).next(".answer").slideUp();
      $(this).removeClass("active");
    }
  });

  //

      let a = 0;
      $(window).scroll(function() {
        let oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.counter-value').each(function() {
            let $this = $(this),
              countTo = $this.attr('data-count');
            $({ countNum: $this.text() }).animate({
              countNum: countTo
            }, {
              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
              }
            });
          });
          a = 1;
        }
      });


});

