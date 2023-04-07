<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />

<?php get_header('commonsecond'); ?>
</div>
<!-- ==========  head~ nav gnb까지 ========== -->

<!-- 게시물이 있으면 본문 출력 -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


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
            <video src="./images/ocean-65560_hr.mp4" muted autoplay></video>
          </div>
          <span class="mouse-icon">
            <img src="./images/mouse.png" alt="" />
          </span>
        </div>

        <div class="mycontainer maincontent">
          <section id="profile">
            <div class="profiletop">
              <span class="profile-img"
                ><span><img src="./images/profile-cat.jpg" alt="" /></span
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
                  ><img src="./images/flag-south-korea_1f1f0-1f1f7.png" alt=""
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
                <li class="line-btn">HTML, CSS</li>
                <li class="line-btn">JavaScript</li>
                <li class="line-btn">React</li>
                <li class="line-btn">PHP</li>
                <li class="line-btn">JQuery</li>
                <li class="line-btn">MySQL</li>
                <li class="line-btn">WordPress</li>
                <li class="line-btn">UI Design</li>
              </ul>
            </div>
          </section>
          <!-- // profile  -->
          <section id="recent-portfolio">
            <h2>Recent Portfolio</h2>
            <div class="portfolio">
              <div class="pf-each">
                <img src="./images/acme.jpeg" alt="" />

                <a class="pf-tt">
                  <h4>LakeSide</h4>

                  <h4>Renewal</h4>
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
              <div class="pf-each">
                <img src="./images/acme.jpeg" alt="" />
                <a class="pf-tt">
                  <h4>LakeSide</h4>
                  <h4>Renewal</h4>
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
              <div class="pf-each">
                <img src="./images/acme.jpeg" alt="" />
                <a class="pf-tt">
                  <h4>LakeSide</h4>
                  <h4>Renewal</h4>
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
            <p>
              <a href="">more works <i class="fa-solid fa-arrow-right"></i></a>
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


<?php endwhile; else : ?>
	<p><?php esc_html_e( '죄송합니다. 맞는 글이 없습니다.' ); ?></p>
<?php endif; ?>




<!-- =============== 푸터 시작 ================= -->
<?php get_footer('commonfirst'); ?>
<!-- 탑버튼 ~ jQuery, common.js까지 -->

<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<?php get_footer('commonsecond'); ?>
<!-- body, html -->

