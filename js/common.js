let topBtn = $("#go-top");

// ----------- functions -------------

// 스크롤양에 따라 보이고 안보임
function btnFade(btn, ost) {
  let scrAmt = $(window).scrollTop();

  if (scrAmt > ost) {
    btn.fadeIn();
  } else {
    btn.fadeOut();
  }
}

$(window).scroll(function () {
  btnFade(topBtn, 750);
});

// aside nav bar 시작 =====

let wholeSectionWrap = $("main"),
  asideNavWrapper = $(".aside-nav"),
  asideNav = asideNavWrapper.find("a"),
  sections = [],
  sectionsOST = [],
  currentIdx = 0,
  targetIdx;

function navArray() {
  asideNav.each(function () {
    let sectionLink = $(this).attr("href");
    sections.push($(sectionLink));

    sectionsOST.push($(sectionLink).offset().top);
  });
}

setTimeout(() => {
  navArray();
}, 500);

asideNav.click(function (e) {
  e.preventDefault();

  targetIdx = $(this).index();

  $("html, body").stop().animate({
    scrollTop: sectionsOST[targetIdx],
  });
});

$(window).scroll(function () {
  let SCT = $(this).scrollTop();
  btnFade(asideNav, 300);

  $.each(sections, function (idx, item) {
    if (SCT >= item.offset().top - 300) {
      asideNav.removeClass("active");
      asideNav.eq(idx).addClass("active");
    }
  });
});
