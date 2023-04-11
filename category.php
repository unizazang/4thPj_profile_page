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
              <a href="/wp/?cat=3" class="line-btn">All</a>

              <?php 
              $catid = $_GET['cat'];
              $this_category = get_cat_name($catid); //loop 밖에 출력
            
              $categories = get_categories( array( 'child_of' => 3 ) ); //2번 카테고리의 하위 목록

              foreach ( $categories as $category ) {
                
              $class = ($this_category == $category->name) ? ' class="line-btn active"' : ' class="line-btn"';
              

              printf( '<a href="%1$s"'.$class.'">%2$s</a>',
                  // esc_attr( 'wp/category/archives/' . $category->id )
                  get_category_link( $category ),
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
                    ><img src="<?php the_post_thumbnail('full'); ?>" alt=""
                  /></span>
                  <figcaption>
                    <h4><?php the_title(); ?></h4>
                    <p>
                    <?php the_field('short-text'); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="white-btn"
                      >페이지로 이동
                      <i class="fa-solid fa-arrow-up-right-from-square"></i
                    ></a>
                  </figcaption>
                </figure>
              </li>

              <?php endwhile; else : ?>
              <li class="no-project"><?php esc_html_e( '최근 프로젝트가 없습니다.' ); ?></li>
              <?php endif; ?>
            </ul>
          </section>
        </main>
        <!-- ========================== 메인끝 ================================ -->

    <?php get_footer('commonfirst'); ?>
    <!-- 탑버튼 ~ jQuery, common.js까지 -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/list.js"></script>

    <?php get_footer('commonsecond'); ?>
    <!-- body, html -->