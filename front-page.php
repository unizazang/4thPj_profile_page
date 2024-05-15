<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />

<?php get_header('commonsecond'); ?>
</div>
<!-- ==========  head~ nav gnb까지 ========== -->

<main>
        <nav class="aside-nav">
          <a href="#headervideo"></a>
          <a href="#profile"></a>
          <a href="#recent-portfolio" class="active"></a>
          <a href="#contact"></a>
        </nav>

        <div class="mycontainer maintitles" id="headervideo">
          <h2 class="header-main-tt">Hello, I'm Yoonhee Lee!</h2>
          <h2 class="header-sub-tt">Welcome to my place.</h2>
        </div>

        <div class="headercontent">
          <div class="video-area">
            <!-- <video src="<?php bloginfo('template_url'); ?>/images/ocean-65560_hr.mp4" muted autoplay loop></video> -->
            <!-- 20240508 코딩으로 수정 -->
            <div class="bg-sky">
              <!-- 여기 안에 내용물 넣을 거임 -->
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
  <stop offset="20%" stop-color="#E38EAF"/>
  <stop offset="80%" stop-color="#E4F8C7"/>
  </linearGradient>
  <linearGradient id="path2" x1="20%" y1="80%" x2="100%" y2="40%">
  <stop offset="20%" stop-color="#3A7B7B"/>
  <stop offset="80%" stop-color="#B6A7C8"/>
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
<div class="star star1"><span class="smstar"></span></div>
<div class="star star2"><span class="smstar"></span></div>
<div class="star star3"><span class="smstar"></span></div>
<div class="star star4"><span class="smstar"></span></div>
<div class="star star5"><span class="smstar"></span></div>

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
                <a href="#contact"><i class="fa-regular fa-envelope"></i></a>
                <a href="https://github.com/unizazang" target="_blank"><i class="fa-brands fa-github"></i></a>
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
            </div>
          </section>
          <!-- // profile  -->
          <section id="recent-portfolio">
            <h2>Recent Portfolio</h2>
            <div class="portfolio">
              <?php 
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'portfolio',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $query = new WP_Query( $args );
              
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
                  // 최신 글 출력
                  ?>
                <div class="pf-each">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
                  <a href="<?php the_permalink(); ?>" class="pf-tt">
                    <?php split_title(); ?>
                    <span><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
                </div>
                  <?php
                }
              } else {
                // 포스트가 없을 경우 출력
                ?>
                <div class="pf-each">
                  <p>아직 글이 없습니다.</p>
                </div>
                <?php
              }
              ?>
              <?php wp_reset_postdata(); ?>
            </div>
            <p>
              <a href="/wp/?cat=3">more works <i class="fa-solid fa-arrow-right"></i></a>
            </p>
          </section>
          <!-- // recent portfolio -->
          <section id="contact">
            <h2>Contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="218" title="profilepage-contact"]' ); ?>
          </section>
          <!-- // contact -->
        </div>
    </main>

<!-- =============== 푸터 시작 ================= -->
<?php get_footer('commonfirst'); ?>
<!-- 탑버튼 ~ jQuery, jQueryUi, common.js까지 -->

<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<?php get_footer('commonsecond'); ?>
<!-- body, html -->

