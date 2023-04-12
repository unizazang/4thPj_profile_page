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

// slick
$(".more-image").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: false,
  arrows: false,
  responsive: [
    // {
    //   breakpoint: 1080,
    //   settings: {
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //   },
    // },
    {
      breakpoint: 517,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$(".additionalimgs .nextbtn").click((e) => {
  e.preventDefault();
  $(".more-image").slick("slickNext");
});

// ----------- modal image ------------- //

let additionalSlideImgs = $(".additionalimgs .more-image .image-slide"),
  pfpointImgsTop = $("#pf-points .points-wrapper li span"),
  pfFeatImgs = $("#pf-images figure span"),
  pfImgOnTopThumb = $(".pf-intro .pf-big-thumb"),
  lightbox = $("#lightbox-overlay"),
  lightboxImg = lightbox.find("img");

pfImgOnTopThumb.click(function () {
  imgModal($(this));
}); //썸네일

pfpointImgsTop.click(function () {
  imgModal($(this));
}); //주요 포인트

pfFeatImgs.click(function () {
  imgModal($(this));
}); //주요 이미지

additionalSlideImgs.click(function () {
  imgModal($(this));
}); //추가 이미지

function imgModal($this) {
  let target = $this.find("img").attr("src"); //선생님이 data속성으로했던이유 : 원래 이미지 src 가 없었고 a태그에 있었어서...
  lightboxImg.attr("src", target);
  $("body").addClass("modal");
  lightbox.fadeIn(500, "easeOutCubic");
}
// let target = $(this).find("img").attr("src");
// lightboxImg.attr("src", target);
// $("body").addClass("modal");
// lightbox.fadeIn();

lightbox.click(function () {
  lightbox.fadeOut(500, "easeOutCubic");
  $("body").removeClass("modal");
});
