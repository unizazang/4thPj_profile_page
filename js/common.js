let topBtn = $("#go-top");

// ----------- functions -------------

// $(window).scroll(function () {

// });

// aside nav bar 시작 =====

let wholeSectionWrap = $("main"),
  asideNavWrapper = $(".aside-nav"),
  asideNav = asideNavWrapper.find("a"),
  sections = [],
  sectionsOST = [],
  currentIdx = 0,
  targetIdx;

// 스크롤양에 따라 보이고 안보임
function btnFade(btn, ost) {
  let scrAmt = $(window).scrollTop();

  if (scrAmt > ost) {
    btn.fadeIn();
  } else {
    btn.fadeOut();
  }
}

function navArray() {
  asideNav.each(function () {
    let sectionLink = $(this).attr("href");
    sections.push($(sectionLink));

    sectionsOST.push($(sectionLink).offset().top);
  });
}

function scrollAnimation(target, easing) {
  $("html, body").stop().animate(
    {
      scrollTop: sectionsOST[target],
    },
    easing,
    "easeInOutCubic"
  );
}

setTimeout(() => {
  navArray();
}, 500);

asideNav.click(function (e) {
  e.preventDefault();

  targetIdx = $(this).index();
  scrollAnimation(targetIdx, 800);

  // $("html, body").stop().animate(
  //   {
  //     scrollTop: sectionsOST[targetIdx],
  //   },
  //   600,
  //   "easeOutCubic"
  // );
});

topBtn.click(function (e) {
  e.preventDefault();
  $("html, body").stop().animate(
    {
      scrollTop: 0,
    },
    900,
    "easeInOutCubic"
  );
});
