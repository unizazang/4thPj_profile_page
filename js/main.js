$(window).scroll(function () {
  btnFade(topBtn, 750); //topbtn

  let SCT = $(this).scrollTop();
  btnFade(asideNav, 750); //nav

  $.each(sections, function (idx, item) {
    if (SCT >= item.offset().top - 300) {
      asideNav.removeClass("active");
      asideNav.eq(idx).addClass("active");
    }
  });
});

// video
let video = $(".video-area video").get(0);
// video.play();

video.click(function () {
  $(this).prop("muted", false);
});

// mouse
let mouseIcon = $(".mouse-icon");
mouseIcon.click(function () {
  $("html, body").stop().animate(
    {
      scrollTop: sectionsOST[1],
    },
    800,
    "easeInOutCubic"
  );
});
