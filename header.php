<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta
      name="description"
      content="프론트엔드 개발자 이윤희 프로필 페이지입니다."
    />
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />

    <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
    <div class="content-wrapper">
      <div class="mycontainer">
        <header class="gnb">
          <h1>Yoonhee's Profile page</h1>
          <nav>
            <ul>
              <li class="active">
                <a href="./index.html">main</a>
              </li>
              <li><a href="./port-list.html">portfolio</a></li>
              <li>
                <a href="">contact</a>
              </li>
              <li class="menu-mail">
                <a href="./index.html#contact"
                  ><i class="fa-regular fa-paper-plane"></i> mail me!</a
                >
              </li> <!-- 클래스를 어찌 다르게 넣었을까요 ....ㅋㅋㅋ ㅠㅠ -->
            </ul>
          </nav>
        </header>
      </div>
      <!-- // 헤더 -->

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
