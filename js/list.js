let layout = $(".pf-wrap").masonry({
  // options
  itemSelector: ".pf-card",
  columnWidth: ".pf-card figure",
  gutter: 54,
});

layout.on("click", ".pf-card", function (e) {
  e.preventDefault();
  $(this).toggleClass("active");
  // trigger layout after item size changes
  layout.masonry("layout");
});

$(".skilltags .line-btn").click(function (e) {
  e.preventDefault();
  $(this).toggleClass("active");
});
$(".pf-card").click(function (e) {});
