<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/detail.css" />

<?php get_header('commonsecond'); ?>
<!-- head~ nav gnb까지 -->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
          <nav class="aside-nav">
            <a href="#pf-top"></a>
            <a href="#pf-points"></a>
            <a href="#pf-images"></a>
          </nav>
          <header id="pf-top">
            <a href="" class="back"
              ><i class="fa-solid fa-chevron-left"></i>back to list</a
            >
            <h2 class="header-main-tt">Portfolio Detail</h2>
          </header>
          <!-- ========================== 섹션 시작 ================================ -->
            <section class="pf-intro">
            <div class="pf-big-thumb">
              <img src="<?php the_post_thumbnail('full'); ?>" alt="" />
            </div>
            <div class="pf-description">
              <h2><?php the_field('top-title'); ?></h2>
              <h4><?php the_field('top-date'); ?></h4>
              <div class="tags">
                <p>HTML, CSS</p>
                <p>JavaScript</p>
                <p>JQuery</p>
                <p>PHP</p>
              </div>
              <p class="desc">
                <?php the_field('top-description'); ?>
              </p>
              <a href="<?php the_field('pageurl'); ?>" class="detail-w-btn"
                >페이지로 이동
                <i class="fa-solid fa-arrow-up-right-from-square"></i
              ></a>
              <a href="<?php the_field('giturl'); ?>" class="detail-git-btn"
                ><i class="fa-brands fa-github"></i> Github</a
              >
            </div>
          </section>
          <!-- ======================== // 포폴소개 ================================== -->
          <section id="pf-points">
            <h2>주요 포인트</h2>
            <ul class="points-wrapper">
              <li>
                <span> <img src="<?php the_field('point-img1'); ?>" alt="" /></span>
                <div class="point-desc">
                  <h3><?php the_field('point-tt1'); ?></h3>
                  <p>
                    <?php the_field('point-desc1'); ?>
                  </p>
                </div>
              </li>
              <li>
                <span> <img src="<?php the_field('point-img2'); ?>" alt="" /></span>
                <div class="point-desc">
                  <h3><?php the_field('point-tt2'); ?></h3>
                  <p>
                    <?php the_field('point-desc2'); ?>
                  </p>
                </div>
              </li>
              <li>
                <span> <img src="<?php the_field('point-img3'); ?>" alt="" /></span>
                <div class="point-desc">
                  <h3><?php the_field('point-tt3'); ?></h3>
                  <p>
                    <?php the_field('point-desc3'); ?>
                  </p>
                </div>
              </li>
            </ul>
          </section>
          <!-- ======================== // 주요포인트 ================================== -->
          <section id="pf-images">
            <h2>주요 이미지</h2>
            <div class="imgs-top">
              <figure>
                <span>
                  <img src="<?php the_field('bottom-portfolio-imgs1'); ?>" alt="" />
                </span>
                <figcaption>
                  <h4><?php the_field('bottom-imgs-tt1'); ?></h4>
                  <p>
                    <?php the_field('bottom-imgs-desc1'); ?>
                  </p>
                </figcaption>
              </figure>
              <figure>
                <span>
                  <img src="<?php the_field('bottom-portfolio-imgs2'); ?>" alt="" />
                </span>
                <figcaption>
                  <h4><?php the_field('bottom-imgs-tt2'); ?></h4>
                  <p>
                    <?php the_field('bottom-imgs-desc2'); ?>
                  </p>
                </figcaption>
              </figure>
            </div>

            <div class="additionalimgs">
              <div class="more-image">
                <div class="slidewrap">
                  <div class="image-slide">
                    <img src="<?php the_field('additional-images1'); ?>" alt="" />
                  </div>
                </div>
                <div class="slidewrap">
                  <div class="image-slide">
                    <img src="<?php the_field('additional-images2'); ?>" alt="" />
                  </div>
                </div>
                <div class="slidewrap">
                  <div class="image-slide">
                    <img src="<?php the_field('additional-images3'); ?>" alt="" />
                  </div>
                </div>

                <!-- 있을 때만 출력해라 -->
                <?php if( get_field('additional-images4') ): ?>
                    <h2><?php the_field('additional-images4'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('additional-images5') ): ?>
                    <h2><?php the_field('additional-images5'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('additional-images6') ): ?>
                    <h2><?php the_field('additional-images6'); ?></h2>
                <?php endif; ?>
              </div>
              <a href="" class="nextbtn"
                ><i class="fa-solid fa-chevron-right"></i
              ></a>
            </div>
          </section>

            <?php endwhile; else : ?>
                            <p><?php esc_html_e( '최근 프로젝트가 없습니다.' ); ?></p>
                            <?php endif; ?>
            <?php wp_reset_query(); ?> 
          <!-- ========================= //주요이미지================================= -->
        </main>
        <div class="dt-menubtns">
          <div class="nextprevpost">
            <a href="" class="detail-w-btn"
              ><i class="fa-solid fa-chevron-left"></i>이전 포트폴리오</a
            >
            <a href="" class="detail-w-btn"
              >다음 포트폴리오<i class="fa-solid fa-chevron-right"></i
            ></a>
          </div>
          <a href="" class="detail-w-btn"
            ><i class="fa-solid fa-list"></i>목록으로</a
          >
        </div>
        

<?php get_footer('commonfirst'); ?>
<!-- 탑버튼 ~ jQuery, common.js까지 -->

<script src="<?php bloginfo('template_url'); ?>/js/detail.js"></script>

<?php get_footer('commonsecond'); ?>
<!-- body, html -->

