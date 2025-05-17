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
                <a href="http://unizazang123.dothome.co.kr/wordpress/">main</a>
              </li>
              <li><a href="#recent-portfolio">portfolio</a></li>
              <li>
                <a href="" onClick="sendEmail(event)">contact</a>
              </li>
              <li class="menu-mail">
                <a href="/wp/index.php#contact"  onClick="sendEmail(event)"
                  ><i class="fa-regular fa-paper-plane"></i> mail me!</a
                >
              </li> 
            </ul>
          </nav>
        </header>

      <!-- // 헤더 -->