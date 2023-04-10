<?php get_header('commonfirst'); ?>
<!-- head 끝나기전 -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />

<?php get_header('commonsecond'); ?>
</div>
<!-- ==========  head~ nav gnb까지 ========== -->

<!-- 게시물이 있으면 본문 출력 -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<main>
    <?php the_content(); ?>
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

