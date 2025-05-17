<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/list.css" />

<?php get_header('commonsecond'); ?>
<div class='cursor'></div>
</div>
<!-- ==========  head~ nav gnb까지 ========== -->

<main>
        <nav class="aside-nav">
          <a href="#headervideo"></a>
          <a href="#profile"></a>
          <a href="#recent-portfolio" class="active"></a>
       
        </nav>

        <div class="mycontainer maintitles" id="headervideo">
          <!-- 20240618 타이핑으로 수정 -->
          <div class="typed-text">
            <span id="typed-output" class="header-main-tt"></span>
            <span id="typed-output-2" class="header-sub-tt "></span>
          </div>
        </div>

        <div class="headercontent">
          <div class="video-area">
            <!-- <video src="<?php bloginfo('template_url'); ?>/images/ocean-65560_hr.mp4" muted autoplay loop></video> -->
            <!-- 20240508 코딩으로 수정 -->
            <div class="bg-sky">
              <!-- 여기 안에 내용물 넣을 거임 -->
              <div class="cards">
                <div class="card1">
                  <div class="wrapgreen">
                    <span>Hover mouse here</span>
                    <h1>Problem solving with a curious mind</h1>
                    <h2>Yoonhee lee // Profile below / mail me</h2>
                  </div>
                  <div class="wrapwhite">
                    <p>My name is Yoonhee Lee, a continuously striving junior frontend developer. I enjoy solving problems and I'm not afraid of challenges. Currently, I am studying various techniques with the goal of becoming a full-stack developer. <br/> Through my problem-solving skills,  <br/>
                      I aim to contribute to the team's growth and become a frontend developer who provides better user experiences through numerous challenges and experiences.
                    </p>
                    <p>(2)</p>
                    <p class="introduction">계속해서 노력하는 신입 프론트엔드 개발자 이윤희입니다.<br/>
                      문제 해결과 개선을 즐기며, 도전을 두려워하지 않습니다.
                      호기심이 많아 문제를 탐구하는 데 열정적이고 스스로 성장하고자 노력합니다.
                      현재 풀스택 개발자를 목표로 기술들을 공부하고 있습니다. 
                      문제해결 능력을 통해 팀의 발전에 기여하고, 수많은 도전과 경험을 통해 
                      더 나은 사용자 경험을 제공하는 프론트엔드 개발자가 되고 싶습니다.
                      <br>
                      2023년 그린컴퓨터아카데미에서 퍼블리셔/프론트엔드 교육을 수료했습니다.
                      2024년 홍익대학교 시각디자인과를 졸업하고 정보처리기사, SQL 개발자를 취득했습니다.
                      저와 함께 성장해나갈 회사를 찾고 있습니다.
                    </p>
                  </div>
                </div>
                <div class="card2">
                  <span>4</span>
                  <p>My name is Yoonhee Lee, a continuously striving junior frontend developer. I enjoy solving problems and I'm not afraid of challenges. Currently, I am studying various techniques with the goal of becoming a full-stack developer. 
                    Through my problem-solving skills, 
                    I aim to contribute to the team's growth and become a frontend developer who provides better user experiences through numerous challenges and experiences.
                    <br/>
                    <br/>
                    I completed Publisher/Frontend Developer training course at Green Computer Academy in 2023. 
                    In 2024, I graduated from Hongik University with a degree in Visual Design. 
                    <br/>
                    <br/> I am looking for a company to grow with.
                  </p>
                </div>
                <div class="card3">
                  <span>develop</span>
                  <h2>PASSIONATE AND ENJOYING CHALLENGES</h2>
                  <p>My name is Yoonhee Lee, a continuously striving junior frontend developer. I enjoy solving problems and I'm not afraid of challenges. Currently, I am studying various techniques with the goal of becoming a full-stack developer. <br/>
                    Through my problem-solving skills, <br/>
                    I aim to contribute to the team's growth and become a frontend developer who provides better user experiences through numerous challenges and experiences.
                  </p>
                </div>
              </div>
              <div class="svgwrapper">

                <svg preserveAspectRatio="xMidYMid slice" viewBox="10 10 100 100">
                <defs>
                <!-- <filter class="blureffect" x="0" y="0" xmlns="http://www.w3.org/2000/svg">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="15" />
                </filter> -->
                <!-- <filter id="f1" xmlns="">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="15" />
                </filter> 이거 넣으면 난데없이 사각형이됨;;; 어케해결하지 -->
                    <linearGradient id="path1" x1="20%" y1="50%" x2="100%" y2="20%">
                    <stop offset="35%" stop-color="#E38EAF" style="stop-opacity:0.85;"/>
                    <stop offset="80%" stop-color="#E4F8C7"   style="stop-opacity:1;"/>
                    </linearGradient>
                    <linearGradient id="path2" x1="20%" y1="80%" x2="100%" y2="40%">
                    <stop offset="20%" stop-color="#3A7B7B" style="stop-opacity:0.8;"/>
                    <stop offset="80%" stop-color="#B6A7C8" style="stop-opacity:1;"/>
                    </linearGradient>
                  <style>
                    path {
                      filter:url(#f1);
                    }
                      @keyframes rotate {
                    0% {
                              transform: rotate(0deg);
                          }
                          100% {
                              transform: rotate(360deg);
                          }
                      }
                      .out-top {
                          animation: rotate 20s linear infinite;
                          transform-origin: 13px 25px;
                          fill:url(#path1);
                      }
                      .in-top {
                          animation: rotate 10s linear infinite;
                          transform-origin: 13px 25px;
                      }
                      .out-bottom {
                          animation: rotate 25s linear infinite;
                          transform-origin: 84px 93px;
                          fill:url(#path2);
                      }
                      .in-bottom {
                          animation: rotate 15s linear infinite;
                          transform-origin: 84px 93px;
                      }
                    </style>
                  </defs>
                <path fill="#E38EAF" class="out-top" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
                <!-- <path fill="#E4F8C7" class="in-top" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/> -->
                <path fill="#3A7B7B" class="out-bottom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
                <!-- <path fill="#B6A7C8" class="in-bottom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/> -->
                </svg>
                </div>
                <div class="star-bg">
                  <div class="starwrap1">
                    <div class="star star1"><span class="smstar"></span></div>
                    <div class="star star2"><span class="smstar"></span></div>
                    <div class="star star3"><span class="smstar"></span></div>
                  </div>
                  <div class="starwrap2">
                    <div class="star star4"><span class="smstar"></span></div>
                    <div class="star star5"><span class="smstar"></span>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="constelacao"></div>
          </div>
          <!-- <span class="mouse-icon">
            <img src="<?php bloginfo('template_url'); ?>/images/mouse.png" alt="" />
          </span> -->
        </div>

        <div class="mycontainer maincontent">
          <section id="profile">
            <div class="profiletop">
              <span class="profile-img"
                ><span><img src="<?php bloginfo('template_url'); ?>/images/profile-cat.jpg" alt="" /></span
              ></span>
              <p class="profilebtns">
                <a href="#contact" class="emailbtn" onClick="sendEmail(event)"><i class="fa-regular fa-envelope"></i></a>
                <a href="https://github.com/unizazang" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://velog.io/@zifnffk321/posts" target="_blank"><i class="fa-solid fa-book"></i></a>
                <button class="share-profile">Share profile</button>
                <span id="toast"></span>
              </p>
            </div>
            <div class="myprofile">
              <h2>Yoonhee Lee</h2>
              <h4>
                <span class="flag"
                  ><img src="<?php bloginfo('template_url'); ?>/images/flag-south-korea_1f1f0-1f1f7.png" alt=""
                /></span>
                Seoul, Korea
              </h4>
              <h3>zifnffk32123@gmail.com</h3>
              <div class="profiletag">
                <h3>Web Frontend Developer</h3>
                <span>freelancer</span>
              </div>
            </div>
            <div class="myskills">
              <h2>My Skills</h2>
              <ul class="skilltags">
                <?php 
                $parent_cat_ID = get_cat_ID( 'portfolio' );
                $childcat = array(
                  'child_of' => $parent_cat_ID
                );
                $child_categories = get_categories( $childcat );

                foreach ( $child_categories as $child_category ) { 
                  // 하위카테고리 출력
                  ?>
                  <li class="line-btn"><?php echo $child_category->name; ?></li>
                <?php
                }
                ?>
              </ul>
              <div class="skill-charts">
                <div class="chart1">
                  <h3 class="chart1-title">Frontend skills
                    <span class="chart1-info">업무에 활용해요</span>
                  </h3>
                  <canvas id="chart1"></canvas>
                </div>
                <div class="chart2">
                  <h3 class="chart2-title">Backend&amp;etc
                    <span class="chart2-info">사용할 줄 알아요</span>
                  </h3>
                  <canvas id="chart2"></canvas>
                </div>
              </div>
            </div>
          </section>
          <!-- // profile  -->
          <section id="recent-portfolio">
            <h2>Recent Portfolio</h2>
            <ul class="pf-wrap">
              <div class="gutter-sizer"></div>
              
              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/레이크사이드1.png" alt="Project 1 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Lakeside Landing page</h4>
                    <p>레이크사이드 홈페이지를 리뉴얼했습니다.</p>
                    <a href="http://unizazang123.dothome.co.kr/lakeside/index.html" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>

              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/레이크사이드2.png" alt="Project 2 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Lakeside Notice page</h4>
                    <p>레이크사이드 홈페이지를 리뉴얼했습니다.</p>
                    <a href="http://unizazang123.dothome.co.kr/lakeside/notice.html" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>

              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/패스트코드1.png" alt="Project 3 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Fastcode Admin page</h4>
                    <p>가상의 LMS 사이트를 구현했습니다.</p>
                    <a href="http://unizazang123.dothome.co.kr/fastcode/admin/login.php" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>

              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/패스트코드2.png" alt="Project 4 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Fastcode Coupon page</h4>
                    <p>LMS 사이트의 쿠폰 페이지를 만들었습니다.</p>
                    <a href="http://unizazang123.dothome.co.kr/fastcode/admin/coupon/coupon_list.php" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>
              
              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/패스트코드3.png" alt="Project 5 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Fastcode Board page</h4>
                    <p>LMS 공지사항 게시판을 만들었습니다.</p>
                    <a href="http://unizazang123.dothome.co.kr/fastcode/admin/board/board_index.php" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>

              <li class="pf-card">
                <figure>
                  <span class="pf-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/images/프로필페이지1.png" alt="Project 6 Thumbnail">
                  </span>
                  <figcaption>
                    <h4>Profile page</h4>
                    <p>포트폴리오 백업용 페이지를 만들었습니다.</p>
                    <a href="#" class="white-btn" target="_blank">페이지로 이동 <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </figcaption>
                </figure>
              </li>
            </ul>
          </section>
          <!-- // recent portfolio -->
          <!-- // recent portfolio -->

          <!-- // contact -->
        </div>
    </main>

<!-- =============== 푸터 시작 ================= -->
<?php get_footer('commonfirst'); ?>
<!-- 탑버튼 ~ jQuery, jQueryUi, common.js까지 -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js" integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- typed.js 추가 0618 -->
<!-- masonry -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/list.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<?php get_footer('commonsecond'); ?>
<!-- body, html -->