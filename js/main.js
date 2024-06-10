$(window).scroll(function () {
  if (window.innerWidth > 450) {
    btnFade(topBtn, 750); //topbtn
  }
 
  
  
  let SCT = $(this).scrollTop();
  btnFade(asideNav, 750); //nav

  $.each(sections, function (idx, item) {
    if (SCT >= item.offset().top - 300) {
      asideNav.removeClass("active");
      asideNav.eq(idx).addClass("active");
    }
  });
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


// ========== 20240508 추가 ===========

// video
// let video = $(".video-area video").get(0);

// video.click(function () {
//   $(this).prop("muted", false);
// });

// bg star 생성

// function createStars(i) {
//   for (var i; i; i--) {
//     drawStars();
//   }
// }

// function drawStars(){
//   var tmpStar = document.createElement('figure')
//   tmpStar.className = "star";
//   tmpStar.style.top = 100*Math.random()+'%';
//   tmpStar.style.left = 100*Math.random()+'%';
//   document.getElementById('stars').appendChild(tmpStar);
// }

// function selectStars() {
//     stars = document.querySelectorAll(".star");
  
// }

// function animateStars() {
//       Array.prototype.forEach.call(stars, function(el, i){
//       TweenMax.to(el, Math.random() * 0.5 + 0.5, {opacity: Math.random(), onComplete: animateStars});
//     });
// }



// createStars(100);
// selectStars();
// animateStars();


// ------------- 다른방법
// GASP 안쓰는걸로
// 안됨...

// var limit = 100, // Max number of stars
//   body = document.body;
// loop = {
//   //initilizeing
//   start: function() {
//     for (var i = 0; i <= limit; i++) {
//       var star = this.newStar();
//       star.style.top = this.rand() * 100 + '%';
//       star.style.left = this.rand() * 100 + '%';
//       star.style.webkitAnimationDelay = this.rand() + 's';
//       star.style.mozAnimationDelay = this.rand() + 's';
//       body.appendChild(star);
//     }
//   },
//   //to get random number
//   rand: function() {
//     return Math.random();
//   },
//   //createing html dom for star
//   newStar: function() {
//     var d = document.createElement('div');
//     d.innerHTML =
//       '<figure class="star"><figure class="star-top"></figure><figure class="star-bottom"></figure></figure>';
//     return d.firstChild;
//   },
// };
// loop.start();


// ------------------- canvas, jQuery 방식 ------


// $(document).ready(function() {
//   $("img").sparkle({
//   //이미지를... 넣어야 되는건가?
//   // accepts a HEX string, or "rainbow" or an array of HEX strings:
//   color: ["#2eafea","#e56604"],
  
//   // determine how many sparkles will be on the element at a time
//   count: 30,
  
//   // tell the canvas how far over the edge of it's container it should overlap in pixels.
//   overlap: 0,
  
//   // set the speed multiplier
//   speed: 1,
  
//   // min size
//   minSize: 4,
  
//   // max size
//   maxSize: 7,
  
//   // "up", "down" or "both" to set which direction the sparkles will travel in.
//   direction: "both"
  
//   });
//   });




// =============== 생성만 하고 애니메이션 없는 vanilla js  > 작동잘됨. 일단 보류 =================

// (function(){

//   function Stars(numberOfStars, divID){
//     var chosenDiv = document.getElementById(divID)  
//     chosenDiv.style.display = "none";
//     chosenDiv.innerHTML = "";
//     function randomFrom(array) {
//       return array[Math.floor(Math.random() * array.length)];
//     }
//     var text = "";
//     var i; 
//     for (i = 0; i < numberOfStars; i++) {
//         bigRange = Array.apply(null, Array(100)).map(function (_, i) {return i;});
//         smallRange = Array.apply(null, Array(3)).map(function (_, i) {return i;});
//         tenRange = Array.apply(null, Array(5)).map(function (_, i) {return i;});
//         starTwinkleStage = randomFrom("9","13");
//         var top = randomFrom(bigRange); 
//         var right = randomFrom(bigRange); 
//         var width = randomFrom(smallRange);
//         text += "<style></style>";
//         text += "<div class='stars' style='top:" + top + "%; right: "+ right +"%; width:" + width + "px; height:" + width + "px;";
//         text += "animation: twinkling " + starTwinkleStage + "s infinite";
//         text += ";box-shadow: 0px 0px 1vw rgba(255, 255, 255, 0.2);'></div>";
//         chosenDiv.innerHTML = text;
//         chosenDiv.style.display = "block";
//     }
// }
  
// // Function(How many stars, id that you want populating)
// Stars(140, "bg-sky");

// })();


// === 새로발견한 포르투갈어 그거 !! ===

function init(){

  //estrelas

  var style = ["style1", "style2", "style3", "style4"];
  var tam = ["tam1", "tam1", "tam1", "tam2", "tam3"];
  var opacity = ["opacity1", "opacity1", "opacity1", "opacity2", "opacity2", "opacity3"];

  function getRandomArbitrary(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
  }

  var estrela = "";
  var qtdeEstrelas = 100; //기본 250
  var noite = document.querySelector(".constelacao");
  var widthWindow = window.innerWidth;
  var heightWindow = window.innerHeight;

  for (var i = 0; i < qtdeEstrelas; i++) {
    estrela += "<span class='estrela " + style[getRandomArbitrary(0, 4)] + " " + opacity[getRandomArbitrary(0, 6)] + " "
    + tam[getRandomArbitrary(0, 5)] + "' style='animation-delay: ." +getRandomArbitrary(0, 9)+ "s; left: "
    + getRandomArbitrary(0, widthWindow) + "px; top: " + getRandomArbitrary(0, heightWindow) + "px;'></span>";
  }

  noite.innerHTML = estrela;

}

window.onload = init;




// =========== cursor animation 0529 ==============

let mouseCursor = document.querySelector(".cursor");
// let videoArea = document.querySelectorAll(".video-area"); // 영역 선택
let cards = document.querySelectorAll(".cards"); // 카드


//window 객체에 scroll & mouse 이벤트를 추가하고 cursor함수 실행되도록 함


// $(videoArea).on('mouseenter',function(){
//   // $('body').css("cursor", 'none');
//   $('.cursor').show();
// });





window.addEventListener("scroll", cursor);
window.addEventListener("mousemove", cursor);

//커스텀 커서의 left값과 top값을 커서의 XY좌표값과 일치시킴
function cursor(e) {
  mouseCursor.style.left = e.pageX + "px";
  mouseCursor.style.top = e.pageY - scrollY + "px";
}


cards.forEach((card) => {
  card.addEventListener("mouseover", () => {
    mouseCursor.classList.add("cursor-grow");
    mouseCursor.style.zIndex = "1000";
    // card.classList.add("hovered-link");
  });
  card.addEventListener("mouseleave", () => {
    mouseCursor.classList.remove("cursor-grow");
    mouseCursor.style.zIndex = "1000";
    // card.classList.remove("hovered-link");
  });
});

// chart.js 추가 240610

 const ctx = document.getElementById('Chart1');

//  FRONTEND SKILLS
 let firstBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['HTML/CSS', 'ES6', 'PHP', 'Wordpress', 'React Js', '하나더'], //항목의 이름, 어레이로 해야 함
    datasets: [{
        label: 'Skill Proficiency', //데이터가 가리키고 있는 전체 영역의 라벨.
        barPercentage: 1,
        barThickness: 20,
        // maxBarThickness: 30,
        minBarLength: 2,
        data: [100, 85, 70, 65, 60, 55, 40, 10] //들어갈 숫자
    }] //array 에 오브젝트로 들어감
},
  options: {
    indexAxis: 'y',
    scales: {
        xAxes: [{
            gridLines: {
                offsetGridLines: true
            }
        }]
    }
  }
});



// chart.js 추가 240610

const ctx2 = document.getElementById('Chart2');

//  FRONTEND SKILLS
 let secondBarChart = new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['HTML/CSS', 'ES6', 'PHP', 'Wordpress', 'React Js', '하나더'], //항목의 이름, 어레이로 해야 함
    datasets: [{
        label: 'Skill Proficiency', //데이터가 가리키고 있는 전체 영역의 라벨.
        barPercentage: 1,
        barThickness: 20,
        // maxBarThickness: 30,
        minBarLength: 2,
        data: [100, 85, 70, 65, 60, 55, 40, 10] //들어갈 숫자
    }] //array 에 오브젝트로 들어감
},
  options: {
    indexAxis: 'y',
    scales: {
        xAxes: [{
            gridLines: {
                offsetGridLines: true
            }
        }]
    }
  }
});
