<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<div class="container mb-5">
<footer class="footer">
	<div class="navs">
	<?php 
	echo get_the_post_navigation( );
	?>
	</div>
	<div class="text-center">
		<a href="<?php echo esc_url( home_url("/event/") ) ?>" class="btn btn-lg">一覧へ戻る</a>
	</div>
</footer>
</div>
<?php get_footer(); ?>