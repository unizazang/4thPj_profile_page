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

video.click(function () {
  $(this).prop("muted", false);
});

// mouse
let mouseIcon = $(".mouse-icon");
mouseIcon.click(function () {
  scrollAnimation(1, 800);
});

// toast

let removeToast;

function toast(string) {
  let toast = $("#toast");

  if (toast.hasClass("reveal")) {
    clearTimeout(removeToast);
    removeToast = setTimeout(function () {
      toast.removeClass("reveal");
    }, 1000);
  } else {
    removeToast = setTimeout(function () {
      toast.removeClass("reveal");
    }, 1000);
  }

  toast.addClass("reveal");
  toast.text(string);
}

// share profile
$("button.share-profile").click(function () {
  var url = window.location.href;
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val(url).select();
  document.execCommand("copy");
  $temp.remove();
  toast("링크가 클립보드에 복사되었습니다.");
});
