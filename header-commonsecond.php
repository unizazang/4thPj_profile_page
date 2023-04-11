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
                <a href="/wp/">main</a>
              </li>
              <li><a href="/wp/?cat=3">portfolio</a></li>
              <li>
                <a href="">contact</a>
              </li>
              <li class="menu-mail">
                <a href="/wp/index.php#contact"
                  ><i class="fa-regular fa-paper-plane"></i> mail me!</a
                >
                <!-- 이거 누르면 frontpage 로 가긴 하지만 index 로연결하면 됨!!! -->
              </li> 
            </ul>
          </nav>
        </header>

      <!-- // 헤더 -->