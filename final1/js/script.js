"use strict";
$(document).ready(function () {
  // back to top
  $(window).on("scroll", function () {
    let currentScrolling = $(this).scrollTop();
    let bc2top = $(".backToTop");

    if (currentScrolling > 150) {
      bc2top.fadeIn();
    } else {
      bc2top.fadeOut(1000);
    }
  });

  // scroll home
  $(".anchorScrollHome").anchorScroll({
    scrollSpeed: 300,
    offsetTop: 0,
  });
  // scroll back to top
  $(".anchorScrollBackToTop").anchorScroll({
    scrollSpeed: 300,
    offsetTop: 0,
  });

  // active filiter
  $("#filter-button li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  // project filter
  $(".filtr-container").filterizr({
    animationDuration: 0.5,
    easing: "ease-out",
  });

  // testimonial slider
  $(".testimonial_slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,

    responsive: [
      {
        breakpoint: 991.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 575.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  // blog slider
  $(".blog_slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 991.98,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 575.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  // progressbar

  $(".raise_fund_progressbar").rProgressbar({
    percentage: 60,
    fillBackgroundColor: "#77c14b",
    backgroundColor: "#EEEEEE",
    borderRadius: "0px",
    height: "10px",
    width: "100%",
  });

  // sponsor slider
  $(".sponsor_slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 3000,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",

    responsive: [
      {
        breakpoint: 1199.98,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 991.98,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 575.98,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  //   end
});
