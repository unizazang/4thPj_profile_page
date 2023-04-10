let layout = $(".pf-wrap").masonry({
  // options
  itemSelector: ".pf-card",
  columnWidth: ".pf-card figure",
  gutter: 54,
});

layout.on("click", ".pf-card", function (e) {
  e.preventDefault();
  $(this).toggleClass("active");
  $(this).find(".pf-thumb").toggleClass("active"); //이미지그림자 active

  // trigger layout after item size changes
  layout.masonry("layout");
});

$(".skilltags .line-btn").filter(":first-of-type").addClass("active");
$(".skilltags .line-btn").click(function (e) {
  e.preventDefault();
  $(this).siblings().removeClass("active");
  $(this).toggleClass("active");
});
// $(".pf-card").click(function (e) {});
