var a = 0;
$(window).scroll(function () {
  // var sticky = $("header"),
  //   scroll = $(window).scrollTop();
  // if (scroll >= 150) {
  //   sticky.addClass("sticky-nav");
  // } else {
  //   sticky.removeClass("sticky-nav");
  // }
});

//menu

$("ul#menu li:has('.drop')")
  .addClass("hasMegaMenu")
  .children("a")
  .prepend('<span class="down"><i class="far fa-chevron-down"></i></span>');

$("ul#menu li:has('.drop')")
  .addClass("hasMegaMenu")
  .children("a")
  .addClass("arr");

function mainMenu() {
  if ($(window).width() > 992) {
    // $("ul#menu li").on("click", function (e) {
    //   console.log("open");
    //   e.stopPropagation();
    //   $(this).toggleClass("up");
    //   $(this).siblings("li").removeClass("up");
    //   $(this).siblings("li").children(".drop").fadeOut();
    //   $(this).children(".drop").fadeToggle();
    // });
    // $("ul#menu li").mouseenter(function () {
    //   $(this).toggleClass("up");
    //   $(this).siblings("li").removeClass("up");
    //   $(this).siblings("li").children(".drop").removeClass("show");
    //   $(this).children(".drop").addClass("show");
    // });
    // $(".drop").mouseleave(function () {
    //   $(".drop").removeClass("show");
    // });
    // $(document).click(function (e) {
    //   if ($(e.target).closest(".drop").length === 0) {
    //     $(".drop").removeClass("show");
    //     $("ul#menu li").removeClass("up");
    //   }
    // });
  } else {
    $(".toggle-icon").on("click", function (e) {
      $(this).toggleClass("close");
      $(".nav-wrap").slideToggle();
    });

    $("ul#menu li a span.down").on("click", function (e) {
      $(this).closest("li").toggleClass("up");
      $(this).closest("li").siblings("li").removeClass("up");
      $(this).closest("li").siblings("li").children(".drop").slideUp();
      $(this).closest("li").children(".drop").slideToggle();
    });
  }
}

mainMenu();

$(document).ready(function ($) {
  //
  $(".hero-carousel .owl-carousel").owlCarousel({
    loop: true,
    item: 1,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    responsive: {
      0: {
        items: 1,
      },
    },
  });
  //

  //
  $(".brand-list .owl-carousel").owlCarousel({
    loop: true,
    item: 1,
    margin: 32,
    nav: true,
    dots: false,
    autoplay: true,
    autoWidth: true,
    responsive: {
      0: {
        items: 2,
      },
      768: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });
  //

  $(".service-carousel .owl-carousel").owlCarousel({
    loop: false,
    margin: 32,
    nav: false,
    dots: false,
    autoplay: true,

    responsive: {
      0: {
        items: 1,
        touchDrag: true,
        mouseDrag: true,
      },
      768: {
        items: 2,
      },
      1200: {
        items: 4,
        touchDrag: false,
        mouseDrag: false,
      },
    },
  });

  //

  $(".team-carousel .owl-carousel").owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,

    responsive: {
      0: {
        items: 1,
        touchDrag: true,
        mouseDrag: true,
      },
      768: {
        items: 2,
      },
      1200: {
        items: 3,
        touchDrag: false,
        mouseDrag: false,
      },
    },
  });

  //

  $(".expertise-carousel .owl-carousel").owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    // autoplay: true,

    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1200: {
        items: 3,
      },
    },
  });
  //

  $(".testimonial-section .owl-carousel").owlCarousel({
    loop: false,
    margin: 32,
    nav: true,
    dots: false,
    // autoplay: true,

    responsive: {
      0: {
        items: 1,
      },
      1200: {
        items: 2,
      },
    },
  });
  //
  var journeysCarousel = $("#journeys");

  journeysCarousel.owlCarousel({
    loop: true,
    // nav:true,
    dots: false,
    margin: 30,
    autoplay: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    touchDrag: false,
    slideBy: 2,
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  $(".pwNext").click(function () {
    journeysCarousel.trigger("next.owl.carousel");
  });
  $(".pwPrev").click(function () {
    journeysCarousel.trigger("prev.owl.carousel");
  });
  //
  $(".remember-checkbox").on("click", function () {
    if ($("input[name=remember]").is(":checked")) {
      $(this).children("input[name='remember']").prop("checked", false);
    } else {
      $(this).children("input[name='remember']").prop("checked", true);
    }
  });

  //

  if ($(".mcs").length > 0) {
    $("#cs-3, #cs-4, #content-1, #ars").mCustomScrollbar({
      autoHideScrollbar: true,
      theme: "rounded",
    });
  }

  //

  $(".check-form").on("click", function () {
    console.log($(this).children("input:checkbox"));
    if ($(this).children("input:checkbox").prop("checked")) {
      $(this).children("input:checkbox").prop("checked", "");
    } else {
      $(this).children("input:checkbox").prop("checked", "checked");
    }
  });

  //

  //

  function intrender() {
    $(".submenu1 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu4 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu7 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });

    $(".submenu2 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    //
    $(".submenu3 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu5 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu6 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu8 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
    $(".submenu9 .owl-carousel").owlCarousel({
      loop: true,
      item: 1,
      margin: 32,
      nav: true,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
        },
        1200: {
          items: 2,
        },
      },
    });
  }

  // intrender();

  $(".submenuul li").mouseenter(function () {
    var mdata = $(this).attr("data");
    $(".submenu-container").hide();
    $(".submenuul li").removeClass("active");
    $(this).toggleClass("active");
    $("#" + mdata).show();
    setTimeout(function () {
      intrender();
    }, 5000);
  });

  if ($(window).width() > 992) {
    $(".submenu-container").eq(0).addClass("a").show();
    $(".hasMegaMenu").mouseenter(function () {
      $(this).find(".submenu-container").eq(0).show();
      intrender();
    });
    $(".hasMegaMenu").mouseleave(function () {
      $(this).find(".submenu-container").hide();
    });
  } else {
    $(".hasMegaMenu a span.down").on("click", function (e) {
      intrender();
    });
  }
  //
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  //
}); //end document

// On resize, call the function again
$(window).on("resize", function () {
  mainMenu();
  if ($(window).width() > 992) {
    ///console.log("bb");
    $(".drop").show();
  } else {
    $(".drop").hide();
  }
});

$(".ou-checkbox").on("click", function () {
  console.log($(this).children("input:checkbox"));
  if ($(this).find("input:checkbox").prop("checked")) {
    $(this).find("input:checkbox").prop("checked", "");
  } else {
    $(this).find("input:checkbox").prop("checked", "checked");
  }
});

$(".radioGroup").on("click", function () {
  $(".card-detail").hide();
  console.log($(this).children("input:radio"));
  if ($(this).find("input:radio").prop("checked")) {
    // $(this).find("input:radio").prop("checked", "");
    $(this).next(".card-detail").show();
  } else {
    $(this).find("input:radio").prop("checked", "checked");
    $(this).next(".card-detail").show();
  }
});

//

//each page screen show hide
$(".screen .step").each(function (e) {
  console.log(e);
  if (e != 0) $(this).hide();
});

if ($(".screen .step:first").is(":visible")) {
  $("#prev").hide();
}

$("#next").click(function () {
  if ($(".screen .step:visible").next().length != 0)
    $(".screen .step:visible").next().show().prev().hide();
  else {
    $(".screen .step:visible").hide();
    // $(".screen div:first").show();
  }

  if ($(".screen .step:last").prev().is(":visible")) {
    console.log("1");
    $("#next").text("finish");
  } else {
    console.log("2");
    $("#next").show();
  }

  if ($(".screen .step:last").is(":visible")) {
    $("#next").hide();
    $("#calculation").show();
  } else {
    $("#next").show();
  }
  if ($(".screen .step").is(":visible")) {
    $("#prev").show();
  }
  return false;
});

$("#prev").click(function () {
  if ($(".screen .step:visible").prev().length != 0)
    $(".screen .step:visible").prev().show().next().hide();
  else {
    $(".screen .step:visible").hide();
    // $(".screen .step:last").show();
  }

  if ($(".screen .step:last").prev().is(":visible")) {
  } else {
    $("#next").text("NEXT");
  }

  if ($(".screen .step:last").is(":visible")) {
    console.log("3");
    $("#next").hide();
  } else {
    console.log(4);
    $("#next").show();
    $("#calculation").hide();
  }

  if ($(".screen .step:first").is(":visible")) {
    $("#prev").hide();
  } else {
    $("#prev").show();
    // $("#finish").hide();
  }
  if ($(".screen .step").is(":visible")) {
    $("#next").show();
  }

  return false;
});
// end

$(".software-type-block").on("click", function () {
  $(this).toggleClass("active");
});

$(".add-position").on("click", function () {
  $(".add-textara").toggleClass("d-none");

  if ($(".far").hasClass("fa-plus-circle")) {
    $(".far").removeClass("fa-plus-circle").addClass("fa-minus-circle");
  } else {
    $(".far").addClass("fa-plus-circle").removeClass("fa-minus-circle");
  }

  // $(this).children(".far").toggleClass("fa-minus-circle");
});
