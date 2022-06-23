"use strict";
$(document).ready(function () {
  // window scroll
  let prevScrolling = $(window).scrollTop();
  $(window).on("scroll", function () {
    let currentScrolling = $(this).scrollTop();
    let stickytop = $("#navbar-fixed");
    let navbar_top_padding_bottom = $(".navbar_top");

    if (prevScrolling > currentScrolling) {
      navbar_top_padding_bottom.removeClass("navbar_top_on_scroll_pb");
      stickytop.removeClass("fixed-top");
    } else {
      navbar_top_padding_bottom.addClass("navbar_top_on_scroll_pb");
      stickytop.addClass("fixed-top");
    }
    prevScrolling = currentScrolling;
  });

  // collapse Nav Link
  $(".nav_link").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  // footer date
  $("#year").text(new Date().getFullYear());

  //   end
});
