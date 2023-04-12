let layout = $(".pf-wrap").masonry({
  // options
  itemSelector: ".pf-card",
  columnWidth: ".pf-card figure",
  gutter: ".gutter-sizer",

  isResizable: true,
});

layout.on("click", ".pf-card", function () {
  $(this).toggleClass("active");
  $(this).find(".pf-thumb").toggleClass("active"); //이미지그림자 active

  // trigger layout after item size changes
  layout.masonry("layout");
  // 얘 레이아웃 바꾼다음 링크가져와서 href 로 스크립트로 보내주기...
});

//$(".skilltags .line-btn").filter(":first-of-type").addClass("active");
$(".skilltags .line-btn").click(function (e) {
  // e.preventDefault();
  $(this).siblings().removeClass("active");
  $(this).toggleClass("active");
});
// $(".pf-card").click(function (e) {});

$(window).scroll(function () {
  btnFade(topBtn, 750);
});
