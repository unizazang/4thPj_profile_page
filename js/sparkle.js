/* =========================================================================
   sparkle.js — 251001
   배경 별밭 + 스킬 미터 애니메이션 + 스크롤 등장 효과
   css/sparkle.css 와 짝입니다. main.js / list.js 다음에 로드됩니다.

   별 깜빡임은 main.css 에 직접 만들어 두신 twinkle-glow 를 씁니다.
   ========================================================================= */

(function () {
  "use strict";

  var reduceMotion =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  var canObserve = "IntersectionObserver" in window;

  function rand(min, max) {
    return Math.random() * (max - min) + min;
  }

  /* ---------------------------------------------------------------
     한 번만 실행되는 스크롤 관찰자
     IntersectionObserver가 없으면 즉시 콜백 → 항상 보이게 됩니다.
     --------------------------------------------------------------- */
  function observeOnce(elements, onEnter, threshold) {
    if (!elements.length) return;

    if (!canObserve) {
      elements.forEach(onEnter);
      return;
    }

    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          onEnter(entry.target);
          io.unobserve(entry.target);
        });
      },
      { threshold: threshold || 0.2, rootMargin: "0px 0px -8% 0px" }
    );

    elements.forEach(function (el) {
      io.observe(el);
    });
  }

  /* ---------------------------------------------------------------
     1. 래퍼 바깥 배경에 깔리는 별밭
     애니메이션은 main.css 의 twinkle-glow 를 그대로 씁니다.
     별마다 시간/딜레이를 흩어서 다 같이 깜빡이지 않게 합니다.
     --------------------------------------------------------------- */

  function setTwinkleTiming(el) {
    el.style.setProperty("--dur", rand(1.4, 3.6).toFixed(2) + "s");
    el.style.setProperty("--delay", rand(0, 3.5).toFixed(2) + "s");
  }

  // 한쪽에 뭉치지 않도록 넓게 흩어놓습니다
  function scatter(el) {
    el.style.left = rand(-1, 101).toFixed(3) + "%";
    el.style.top = rand(0, 100).toFixed(3) + "%";
  }

  function makeTwinkle(sizeMin, sizeMax) {
    var el = document.createElement("span");
    el.className = "twinkle";
    el.style.setProperty("--s", rand(sizeMin, sizeMax).toFixed(1) + "px");
    el.style.setProperty("--glow", rand(3, 10).toFixed(0) + "px");
    setTwinkleTiming(el);
    scatter(el);
    return el;
  }

  function makeSparkleStar(sizeMin, sizeMax) {
    var el = document.createElement("span");
    el.className = "sparkle-star";
    el.style.setProperty("--s", rand(sizeMin, sizeMax).toFixed(1) + "px");
    setTwinkleTiming(el);
    scatter(el);
    return el;
  }

  // main.css 의 .star (직접 그리신 십자 별) 를 배경에도 뿌립니다
  function makeDrawnStar(sizeMin, sizeMax) {
    var el = document.createElement("span");
    el.className = "drawn-star";
    el.style.setProperty("--s", rand(sizeMin, sizeMax).toFixed(1) + "px");
    setTwinkleTiming(el);
    scatter(el);
    return el;
  }

  function initSky() {
    if (document.querySelector(".sky-layer")) return;

    var layer = document.createElement("div");
    layer.className = "sky-layer";
    layer.setAttribute("aria-hidden", "true");

    var frag = document.createDocumentFragment();

    // 레이어가 문서 전체를 덮으므로, 화면이 아니라 페이지 넓이 기준으로
    // 개수를 정합니다. 페이지가 길수록 별이 많아집니다.
    var pageH = Math.max(
      document.documentElement.scrollHeight,
      window.innerHeight
    );
    var area = (window.innerWidth * pageH) / 1000000;

    var grains = Math.round(Math.min(420, Math.max(90, area * 46)));
    var stars = Math.round(Math.min(110, Math.max(24, area * 12)));
    var drawn = Math.round(Math.min(70, Math.max(16, area * 8)));

    var i;
    for (i = 0; i < grains; i++) frag.appendChild(makeTwinkle(1.4, 3.4));
    for (i = 0; i < stars; i++) frag.appendChild(makeSparkleStar(8, 24));
    for (i = 0; i < drawn; i++) frag.appendChild(makeDrawnStar(14, 40));

    layer.appendChild(frag);
    document.body.insertBefore(layer, document.body.firstChild);

    // 이미지가 늦게 로드되거나 카드를 펼치면 문서 높이가 바뀝니다.
    // 별밭이 항상 페이지 끝까지 덮도록 높이를 따라가게 합니다.
    //
    // 주의: 레이어는 absolute 라 자기 높이가 문서 scrollHeight 에 그대로
    // 들어갑니다. scrollHeight 를 그냥 읽어서 높이로 쓰면 자기가 만든
    // 값을 다시 읽어 계속 불어납니다(실제로 4595px 페이지가 6530px 이
    // 됐습니다). 잴 때만 레이어를 빼고 순수 콘텐츠 높이를 읽습니다.
    var sizing = false;

    function sizeSky() {
      if (sizing) return;
      sizing = true;

      layer.style.display = "none";
      var h = document.documentElement.scrollHeight;
      layer.style.display = "";
      layer.style.height = h + "px";

      sizing = false;
    }

    sizeSky();
    window.addEventListener("load", sizeSky);
    window.addEventListener("resize", sizeSky);

    // documentElement 를 보면 레이어 변경이 스스로를 다시 트리거합니다.
    // 레이어가 건드릴 수 없는 컨텐츠 박스만 관찰합니다.
    var wrapper = document.querySelector(".content-wrapper");
    if (window.ResizeObserver && wrapper) {
      new ResizeObserver(sizeSky).observe(wrapper);
    }
  }

  /* ---------------------------------------------------------------
     2. 히어로의 회전 SVG 래퍼 안쪽 작은 별들
     --------------------------------------------------------------- */
  function initSvgStars() {
    var wrap = document.querySelector(".svgwrapper");
    if (!wrap || wrap.querySelector(".svg-stars")) return;

    var box = document.createElement("div");
    box.className = "svg-stars";
    box.setAttribute("aria-hidden", "true");

    var frag = document.createDocumentFragment();
    var i;
    for (i = 0; i < 40; i++) frag.appendChild(makeTwinkle(1.4, 3.2));
    for (i = 0; i < 14; i++) frag.appendChild(makeSparkleStar(7, 17));
    for (i = 0; i < 10; i++) frag.appendChild(makeDrawnStar(11, 24));

    box.appendChild(frag);
    wrap.appendChild(box);
  }

  /* ---------------------------------------------------------------
     3. 스킬 미터 — 막대가 차오르고 숫자가 올라갑니다
     --------------------------------------------------------------- */
  function countUp(el, target, duration) {
    var start = null;

    function step(now) {
      if (start === null) start = now;
      var p = Math.min((now - start) / duration, 1);
      // easeOutCubic — 막대 채우기와 느낌을 맞춥니다
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased);
      if (p < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  function initSkillMeters() {
    var groups = [].slice.call(document.querySelectorAll(".skill-meters"));
    if (!groups.length) return;

    // JS가 살아있을 때만 0에서 시작합니다 (없으면 CSS 기본값 그대로 노출)
    if (!reduceMotion) {
      groups.forEach(function (g) {
        g.classList.add("js-anim");
      });
    }

    observeOnce(
      groups,
      function (group) {
        group.classList.add("in-view");
        if (reduceMotion) return;

        var values = [].slice.call(
          group.querySelectorAll(".skill-meter-value")
        );
        values.forEach(function (el, i) {
          var target = parseInt(el.getAttribute("data-val"), 10);
          if (isNaN(target)) return;
          el.textContent = "0";
          setTimeout(function () {
            countUp(el, target, 1100);
          }, i * 110);
        });
      },
      0.35
    );
  }

  /* ---------------------------------------------------------------
     4. 포트폴리오 카드 등장
     Masonry가 li에 transform을 쓰므로 안쪽 figure만 움직입니다.
     --------------------------------------------------------------- */
  function initCardReveal() {
    var cards = [].slice.call(document.querySelectorAll(".pf-card"));
    if (!cards.length) return;

    if (reduceMotion) {
      cards.forEach(function (c) {
        c.classList.add("revealed");
      });
      return;
    }

    observeOnce(
      cards,
      function (card) {
        // 같은 줄 카드들이 아주 살짝 시차를 두고 올라옵니다
        var idx = cards.indexOf(card) % 3;
        var fig = card.querySelector("figure");
        if (fig) fig.style.transitionDelay = idx * 0.08 + "s";
        card.classList.add("revealed");
      },
      0.15
    );
  }

  /* ---------------------------------------------------------------
     5. 섹션 등장
     .reveal 클래스를 JS가 붙입니다 → JS가 없으면 그냥 보입니다.
     --------------------------------------------------------------- */
  function initSectionReveal() {
    if (reduceMotion) return;

    var targets = [].slice.call(
      document.querySelectorAll(
        ".skill-charts .chart1, .skill-charts .chart2, #recent-portfolio > h2, .skilltags"
      )
    );
    if (!targets.length) return;

    targets.forEach(function (el) {
      el.classList.add("reveal");
    });

    observeOnce(
      targets,
      function (el) {
        el.classList.add("revealed");
      },
      0.15
    );
  }

  function init() {
    initSky();
    initSvgStars();
    initSkillMeters();
    initCardReveal();
    initSectionReveal();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
