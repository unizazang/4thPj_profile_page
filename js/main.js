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


// ========= 240618 추가 - typed.js 

document.addEventListener("DOMContentLoaded", function() {
  // 첫 번째 문자열 타이핑
  var typed1 = new Typed("#typed-output", {
    strings: ["Hello, I'm Yoonhee Lee!^2000"],
    typeSpeed: 90,
    startDelay: 500,
    showCursor: true,
    cursorChar: '|',
    onStringTyped: (strings, self) => {
      setTimeout(() => {
        self.cursor.remove();
      }, 10); // 커서를 0.001초 뒤에 제거
    },
    onComplete: (self) => {
      
      // 첫 번째 타이핑 완료 후 두 번째 타이핑 시작
      var typed2 = new Typed("#typed-output-2", {
        strings: ["<br>Junior Frontend Developer."],
        typeSpeed: 90,
        startDelay: 3000,
        showCursor: true,
        cursorChar: '|',
        onComplete: (self) => {
          setTimeout(() => {
            self.cursor.remove();
          }, 5000); // 커서를 3초 뒤에 제거
        }
      });
    }
  });
});


/* 

*/


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


// videoArea.hover(()=>{


  //이벤트가 일어나면 할일…
  
  // 영역 안에 커서가 들어오면 .cursor 를 display:block으로
  // 영역 밖으로 커서가 나가면  display:none 으로

  // mouseCursor.css('display', 'block');
  // // $('body').css('cursor','none')
  // }, ()=>{
  // mouseCursor.css('display', 'none');
  // $('body').css('cursor','auto')
  // });

// =========== cursor animation 0529 ==============
/*
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
// 왜 함수만 선언했는데 자동으로 실행 된거지? > 위에 윈도우에 이벤트 리스너를 붙여줬음 cursor랑

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


*/ // 240613 jQuery로 바꾸는 실험 중 ---
// 마우스 무브 이벤트가 발생 하면 그 영역에 있는지 아닌지 확인,
// 그 안에 있으면 저거 실행, 아니면 실행안함.
// 클래스명 있는지 확인. 이 코드 작성할 것


$(document).ready(function() {
  let mouseCursor = $(".cursor");
  let videoArea = $(".video-area"); // 영역 선택
  let cards = $(".cards"); // 카드
  var windowWidth = $( window ).width();

  // let pfBtns = $(".profilebtns").children(); //버튼들

  videoArea.on('mousemove', function(e) {
    mouseCursor.css({
      left: e.pageX + 'px',
      top: e.pageY - scrollY + 'px'
    });
  });

  videoArea.on('mouseenter', function() {
    mouseCursor.show();
    $('body').css('cursor', 'none');
  });

  videoArea.on('mouseleave', function() {
    mouseCursor.hide();
    $('body').css('cursor', 'default');
  });

  cards.each(function() {
    $(this).on('mouseover', function() {
      mouseCursor.addClass('cursor-grow');
      
    });
    $(this).on('mouseleave', function() {
      mouseCursor.removeClass('cursor-grow');
      
    });

    if(windowWidth < 515){
      mouseCursor.hide();
      $('body').css('cursor', 'default');
    }

    
  });

  
});





// pfBtns.each(function() {
  //   $(this).on('mouseover', function() {
  //     mouseCursor.addClass('cursor-grow');
  //     console.log('profilebtns');
  //   });
  //   $(this).on('mouseleave', function() {
  //     mouseCursor.removeClass('cursor-grow');
      
  //   });
  // });
















// chart.js 추가 240610

//  const ctx = document.getElementById('Chart1');

// //  FRONTEND SKILLS
//  let firstBarChart = new Chart(ctx, {
//   type: 'bar',
//   data: {
//     labels: ['HTML/CSS', 'ES6', 'PHP', 'Wordpress', 'React Js', '하나더'], //항목의 이름, 어레이로 해야 함
//     datasets: [{
//         label: 'Skill Proficiency', //데이터가 가리키고 있는 전체 영역의 라벨.
//         barPercentage: 0.9,
//         barThickness: 20,
//         // maxBarThickness: 30,
//         minBarLength: 2,
//         data: [70, 85, 70, 65, 60, 55, 40, 10] //들어갈 숫자
//     }] //array 에 오브젝트로 들어감
// },
//   options: {
//     indexAxis: 'y',
//     scales: {
//         xAxes: [{
//             gridLines: {
//                 offsetGridLines: true
//             }
//         }]
//     }
//   }
// });



// // chart.js 추가 240610

// const ctx2 = document.getElementById('Chart2');

// //  FRONTEND SKILLS
//  let secondBarChart = new Chart(ctx2, {
//   type: 'bar',
//   data: {
//     labels: ['HTML/CSS', 'ES6', 'PHP', 'Wordpress', 'React Js', '하나더'], //항목의 이름, 어레이로 해야 함
//     datasets: [{
//         label: 'Skill Proficiency', //데이터가 가리키고 있는 전체 영역의 라벨.
//         barPercentage: 0.9,
//         barThickness: 20,
        
//         // maxBarThickness: 30,
//         minBarLength: 2,
//         data: [70, 85, 70, 65, 60, 55, 40, 10] //들어갈 숫자
//     }] //array 에 오브젝트로 들어감
// },
//   options: {
//     indexAxis: 'y',
//     scales: {
//         xAxes: [{
//             gridLines: {
//                 offsetGridLines: true
//             }
//         }]
//     }
//   }
// });


// ---- chart gradient


// https://www.chartjs.org/docs/latest/samples/advanced/linear-gradient.html
// https://www.chartjs.org/docs/latest/samples/advanced/linear-gradient.html
// https://yeon22.github.io/Chartjs-kr/docs/latest/charts/bar.html#barpercentage-vs-categorypercentage


// getgradient
// let width, height, gradient;
// function getGradient(ctx, chartArea) {
//   const chartWidth = chartArea.right - chartArea.left;
//   const chartHeight = chartArea.bottom - chartArea.top;
//   if (!gradient || width !== chartWidth || height !== chartHeight) {
//     // Create the gradient because this is either the first render
//     // or the size of the chart has changed
//     width = chartWidth;
//     height = chartHeight;
//     gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
//     gradient.addColorStop(0, Utils.CHART_COLORS.blue);
//     gradient.addColorStop(0.5, Utils.CHART_COLORS.yellow);
//     gradient.addColorStop(1, Utils.CHART_COLORS.red);
//   }

//   return gradient;
// }

// //config
// const config = {
//   type: 'line',
//   data: data,
//   options: {
//     responsive: true,
//     plugins: {
//       legend: {
//         position: 'right',
//       },
//     }
//   },
// };


// //setup
// const DATA_COUNT = 7;
// const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};
// const labels = Utils.months({count: 7});

// const data = {
//   labels: labels,
//   datasets: [
//     {
//       label: 'Dataset 1',
//       data: Utils.numbers(NUMBER_CFG),
//       borderColor: function(context) {
//         const chart = context.chart;
//         const {ctx, chartArea} = chart;

//         if (!chartArea) {
//           // This case happens on initial chart load
//           return;
//         }
//         return getGradient(ctx, chartArea);
//       },
//     },
//   ]
// };

// // actions

// const actions = [
//   {
//     name: 'Randomize',
//     handler(chart) {
//       chart.data.datasets.forEach(dataset => {
//         dataset.data = Utils.numbers({count: chart.data.labels.length, min: -100, max: 100});
//       });
//       chart.update();
//     }
//   },
//   {
//     name: 'Add Data',
//     handler(chart) {
//       const data = chart.data;
//       if (data.datasets.length > 0) {
//         data.labels = Utils.months({count: data.labels.length + 1});

//         for (let index = 0; index < data.datasets.length; ++index) {
//           data.datasets[index].data.push(Utils.rand(-100, 100));
//         }

//         chart.update();
//       }
//     }
//   },
//   {
//     name: 'Remove Data',
//     handler(chart) {
//       chart.data.labels.splice(-1, 1); // remove the label first

//       chart.data.datasets.forEach(dataset => {
//         dataset.data.pop();
//       });

//       chart.update();
//     }
//   }
// ];

// 이거 데이터... 각 그거에 맞게 넣어야 할 듯. 내일 보고 하기


let width, height, gradient;

    function getGradient(ctx, chartArea) {
      const chartWidth = chartArea.right - chartArea.left;
      const chartHeight = chartArea.bottom - chartArea.top;
      if (!gradient || width !== chartWidth || height !== chartHeight) {
        width = chartWidth;
        height = chartHeight;
        gradient = ctx.createLinearGradient(90, chartArea.top, 360, chartArea.bottom);
        gradient.addColorStop(0, '#FACFD9');
        gradient.addColorStop(0.77, '#B6CCF7');
      }
      return gradient;
    }

    const labels = ['HTML/CSS', 'Javascript', 'JQuery', 'React'];
    const data = {
      labels: labels,
      datasets: [
        {
          label: 'Skill Proficiency',
          barThickness: 15,
          data: [100, 65, 80, 60],
          backgroundColor: function(context) {
            const chart = context.chart;
            const {ctx, chartArea} = chart;
            if (!chartArea) {
              return;
            }
            return getGradient(ctx, chartArea);
          },
          
          borderRadius: { //객체로 각각설정해서 세로선쪽에도 가능하도록
            topLeft: 4,
            topRight: 4,
            bottomLeft: 4,
            bottomRight: 4
          }
        },
      ]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        indexAxis: 'y',
        scales: {
          x: {
            beginAtZero: true,
              scaleLineColor: 'red',
                grid: {
                  color: 'transparent',
                },
             },
           y: {
             beginAtZero: true,
               grid: {
                 color: 'transparent',
               },
           }
        },
        responsive: true,
        plugins: {
          legend: {
            // position: 'top',
            display: false, // 범례 가리기
          },
        },
        scales:{
          x: {
            display: false, // 숫자 가리기
            beginAtZero: true,
              scaleLineColor: 'red',
                grid: {
                  color: 'transparent',
                },
             },
          
          y: {
            border: {
              display: false
            },
            beginAtZero: true,
               grid: {
                 color: 'transparent',
               },
            ticks: {
              
              color: '#868686',
              font: {
                weight: 'bold'
              }
            }
          }
        }
      },
    };

/* ------------------- chart 1 끝 --------------------- */

const labels2 = ['PHP', 'MySQL', 'WordPress', 'Git'];
    const data2 = {
      labels: labels2,
      datasets: [
        {
          label: 'Skill Proficiency',
          barThickness: 15,
          data: [50, 40, 60, 70],
          backgroundColor: function(context) {
            const chart = context.chart;
            const {ctx, chartArea} = chart;
            if (!chartArea) {
              return;
            }
            return getGradient(ctx, chartArea);
          },
          
          borderRadius: 4
        },
      ]
    };

    /* 인도인 코드... 근데 안됨
        const backgroundBar = {
      id: 'backgroundBar',
      beforeDatasetsDraw(chart, args, pluginOptions){
        const { data, ctx, chartArea: {top,bottom,left,right,width,height}, scale:{ x,y}} = chart;

        ctx.save();
        const segment = width / data.labels.length;
        
        ctx.fillStyle = '#e6e6e6';
        ctx.fillRect(x.getPixelForValue(0), right, segment, height);
      }
    };
    */
    const config2 = {
      type: 'bar',
      data: data2, //여기를 위에 data2 변수명이랑 통일해줘야
      options: {
        indexAxis: 'y',
        responsive: true,
        plugins: {
          legend: {
            // position: 'top',
            display: false, // 범례 가리기
          },
          
        },
        scales:{
          x: {
            display: false,
            beginAtZero: true,
              scaleLineColor: 'red',
                grid: {
                  color: 'transparent',
                },
             },
          
          y: {
            border: {
              display: false
            },
            beginAtZero: true,
               grid: {
                 color: 'transparent',
               },
            
            ticks: {
              color: '#868686',
              font: {
                weight: 'bold'
              }
            }
          }
        }
      },
    };


// 실행
    const ctxgpt = document.getElementById('chart1').getContext('2d');
    const myChart = new Chart(ctxgpt, config);

    

    const ctxgpt2 = document.getElementById('chart2').getContext('2d');
    const myChart2 = new Chart(ctxgpt2, config2);



// =================== 250114 이메일 바로보내기 버튼 추가 ========================

function sendEmail(event) {
  // 기본 동작 막기
  event.preventDefault();

  // 이메일 주소 설정
  const email = "zifnffk32123@gmail.com"; // 여기에 자신의 이메일 주소를 입력하세요.
  const subject = encodeURIComponent(""); // 이메일 제목
  const body = encodeURIComponent(""); // 이메일 본문
  
  // Gmail로 이동하는 링크 열기
  const mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;
  
  // 브라우저가 mailto 링크로 이동
  window.location.href = mailtoLink;
}
