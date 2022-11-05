<div class="l-section">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1 class="entry-title" itemprop="headline">
					<?php the_title() ?>
				</h1>
				<div class="fs-6 text-gray mb-4">
					<?php echo get_the_date() ?>
					<?php 
					the_category( "、");
					?>
				</div>
			</header>
			<div class="entry-content">
				<div class="mb-5">
					<?php the_post_thumbnail() ?>
				</div>
				<?php the_content() ?>
				
			</div>
		</article>
	</div>
</div>