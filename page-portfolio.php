<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/list.css" />

<?php get_header('commonsecond'); ?>
<!-- head~ nav gnb까지 -->


<!-- 게시물이 있으면 본문 출력 -->

        <main>
          <header>
            <h2 class="header-main-tt">Portfolio List</h2>
            <div class="skilltags">
              <a href="" class="line-btn">All</a>

              <?php 
                $categories = get_categories( array( 'child_of' => 3 ) ); //2번 카테고리의 하위 목록
                foreach ( $categories as $category ) {
                printf( '<a href="%1$s" class="line-btn">%2$s</a>',
                    esc_attr( 'wp/category/archives/' . $category->category_nicename ),
                    esc_html( $category->cat_name )
                );
            }
        ?>

<!--          <a href="" class="line-btn">HTML, CSS</a>
              <a href="" class="line-btn">JavaScript</a>
              <a href="" class="line-btn">React</a>
              <a href="" class="line-btn">JQuery</a>
              <a href="" class="line-btn">MySQL</a>
              <a href="" class="line-btn">WordPress</a>
              <a href="" class="line-btn">PHP</a> -->


            </div>
          </header>
          <!-- ========================== 섹션 시작 ================================ -->
          <section class="portfolio-list">
            <ul class="pf-wrap">
             <!-- <li class="pf-card">
                <figure>
                  <span class="pf-thumb"
                    ><img src="./images/acme.jpeg" alt=""
                  /></span>
                  <figcaption>
                    <h4>LakeSide 홈페이지 리뉴얼</h4>
                    <p>
                      html, css, javascript를 이용하여 반응형 웹사이트를
                      구축했습니다.
                    </p>
                    <a href="" class="white-btn"
                      >페이지로 이동
                      <i class="fa-solid fa-arrow-up-right-from-square"></i
                    ></a>
                  </figcaption>
                </figure>
              </li> -->


              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li class="pf-card">
                <figure>
                  <span class="pf-thumb"
                    ><img src="./images/acme.jpeg" alt=""
                  /></span>
                  <figcaption>
                    <h4>LakeSide 홈페이지 리뉴얼</h4>
                    <p>
                      html, css, javascript를 이용하여 반응형 웹사이트를
                      구축했습니다.
                    </p>
                    <a href="" class="white-btn"
                      >페이지로 이동
                      <i class="fa-solid fa-arrow-up-right-from-square"></i
                    ></a>
                  </figcaption>
                </figure>
              </li>


            </ul>
          </section>
        </main>
        <!-- ========================== 메인끝 ================================ -->

<?php get_footer('commonfirst'); ?>
<!-- 탑버튼 ~ jQuery, common.js까지 -->

<script src="<?php bloginfo('template_url'); ?>/js/detail.js"></script>

<?php get_footer('commonsecond'); ?>
<!-- body, html -->