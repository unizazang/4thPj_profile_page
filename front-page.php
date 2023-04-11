<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />

<?php get_header('commonsecond'); ?>
</div>
<!-- ==========  head~ nav gnb까지 ========== -->

<!-- 게시물이 있으면 본문 출력 -->


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
            <video src="<?php bloginfo('template_url'); ?>/images/ocean-65560_hr.mp4" muted autoplay loop></video>
          </div>
          <span class="mouse-icon">
            <img src="<?php bloginfo('template_url'); ?>/images/mouse.png" alt="" />
          </span>
        </div>

        <div class="mycontainer maincontent">
          <section id="profile">
            <div class="profiletop">
              <span class="profile-img"
                ><span><img src="<?php bloginfo('template_url'); ?>/images/profile-cat.jpg" alt="" /></span
              ></span>
              <p class="profilebtns">
                <a href=""><i class="fa-regular fa-envelope"></i></a>
                <a href=""><i class="fa-brands fa-github"></i></a>
                <button class="share-profile">share profile</button>
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
                <!-- 여기 카테고리 출력하는걸로 바꿀까? -->
                <!-- <li class="line-btn">HTML, CSS</li>
                <li class="line-btn">JavaScript</li>
                <li class="line-btn">React</li>
                <li class="line-btn">PHP</li>
                <li class="line-btn">JQuery</li>
                <li class="line-btn">MySQL</li>
                <li class="line-btn">WordPress</li>
                <li class="line-btn">UI Design</li> -->

                <?php 
                
                $parent_cat_ID = get_cat_ID( 'portfolio' );
                $childcat = array(
                  'child_of' => $parent_cat_ID
                );
                $child_categories = get_categories( $childcat );

                foreach ( $child_categories as $child_category ) {
                  // 하위 카테고리를 출력하는 코드
                  ?>
                  <?php if() //현재카테고리의 이름을 출력 ,, $child_category->name; 과 같으니?  ?>
                  <li class="line-btn"><a href=""><?php echo $child_category->name; ?></a></li>
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
                  // 최신 글을 출력하는 코드
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
                // 포스트가 없을 경우 출력하는 코드
                ?>
                <div class="pf-each">
                  <p>아직 글이 없습니다.</p>
                </div>
                <?php
              }
              ?>

              <!-- <div class="pf-each">
                <img src="< ?php bloginfo('template_url'); ?>/images/acme.jpeg" alt="" />

                <a href="" class="pf-tt">
                  <h4>LakeSide</h4>
                  <h4>Renewal</h4>
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div> -->

              <?php wp_reset_postdata(); ?>
            </div>
            <p>
              <a href="/wp/?cat=3">more works <i class="fa-solid fa-arrow-right"></i></a>
            </p>
          </section>
          <!-- // recent portfolio -->
          <section id="contact">
            <h2>Contact</h2>
            <form action="">
              <label for="cpname">company name</label>
              <input
                type="text"
                id="cpname"
                name="cpname"
                placeholder="company name"
              />

              <label for="email">email address</label>
              <input
                type="text"
                id="email"
                name="email"
                placeholder="email address"
              />
              <label for="message">message</label>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="message"
              ></textarea>
              <button class="filled-btn">send</button>
            </form>
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

