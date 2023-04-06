$(window).scroll(function () {
  btnFade(topBtn, 750);

  let SCT = $(this).scrollTop();
  btnFade(asideNav, 300); //nav

  $.each(sections, function (idx, item) {
    if (SCT >= item.offset().top - 300) {
      asideNav.removeClass("active");
      asideNav.eq(idx).addClass("active");
    }
  });
});
