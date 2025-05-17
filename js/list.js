// 이미지 로딩 완료 후 Masonry 초기화
var $grid = $(".pf-wrap").imagesLoaded(function () {
  $grid.masonry({
    itemSelector: ".pf-card",
    columnWidth: ".pf-card",
    gutter: ".gutter-sizer",
    percentPosition: true,
    isResizable: true,
    transitionDuration: "0.4s", // 부드러운 전환 효과
    stagger: 30, // 아이템들이 순차적으로 배치되도록 지연시간 추가
  });
});

$grid.on("click", ".pf-card", function (e) {
  // 링크 클릭 방지 (링크 클릭 시에는 이벤트 전파 중지)
  if ($(e.target).is("a") || $(e.target).parents("a").length) {
    return;
  }

  e.preventDefault();

  // 현재 active 상태
  var wasActive = $(this).hasClass("active");

  // active 클래스 토글
  $(this).toggleClass("active");

  // 이미지그림자 토글
  $(this).find(".pf-thumb").toggleClass("active");

  // Masonry 레이아웃 업데이트 (지연시간 제거)
  $grid.masonry("layout");
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
