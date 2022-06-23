"use script";
$(document).ready(function () {
  
  // active filiter
  $("#project-page-filter-button li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  // project filter
  $(".project-page-filtr-container").filterizr({
    animationDuration: 0.5,
    easing: "ease-out",
  });

  // for sm
  $("#project-page-filter-button-sm li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".project-page-filtr-container-sm").filterizr({
    animationDuration: 0.5,
    easing: "ease-out",
  });

  //   end
});
