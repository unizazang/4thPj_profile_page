<?php 
// 여기서 바꿔도되는건 이 함수 이름 뿐이에요.
function minimal_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   } //함수 정의
   add_action( 'init', 'minimal_menus' );
    // 워드프레스 실행되면 그때 실행해 //변경했다면 이 이름을 여기 바꿔줘야해요
    // 위에 연관배열만드는거임~!
    // __ < 메뉴 출력하는 함수입니다 워드프레스에서...

  add_theme_support( 'post-thumbnails' ); //썸네일 기능 추가

  // ==================================================================
  //펑션이 없으면 만들어~

  if ( ! function_exists( 'minimal_numbered_pagination' ) ) {
    function minimal_numbered_pagination() {
        $args = array(
            'prev_next' => false,
            'type' => 'array'
        );
       
        $pagination = paginate_links( $args );
  
  
        if ( is_array( $pagination ) ) {
            echo '<div class="pagenation shadow">';
            echo '<ul class="nav nav-pills">';
            foreach ( $pagination as $page ) {
                if ( strpos( $page, 'current' ) ) {
                    echo '<li class="active"><a href="#">' . $page . '</a></li>';
                } else {
                    echo '<li>' . $page . '</li>';
                }
            }
            echo '</ul>';
            echo '</div>';
        }
       
    }
  }
  