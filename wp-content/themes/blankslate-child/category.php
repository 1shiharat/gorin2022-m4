<?php get_header() ?>

<div class="container">
<div class="row">
<div class="col-lg-8">
<section class="l-section container mb-5">
  <div class="c-event">
    <div class="c-event__title">
      <h2 class="">お知らせ</h2>
    </div>
  
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php

      if (have_posts()) :
        while (have_posts()) :
          the_post();

      ?>
          <div class="col">
            <a href="<?php the_permalink() ?>" class="card">
              <?php 
              $image_url = esc_url( get_theme_file_uri("/m4-image/noimage.svg") );
              if ( has_post_thumbnail()) {
                $image_url = esc_url(get_the_post_thumbnail_url(null, 'thumbnail'));
              }
              
              ?>
              <img src="<?php echo $image_url ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <div class="c-event__card-footer d-flex justify-content-between"><span class="c-event__category"><?php echo get_the_terms(get_the_ID(), 'event-category')[0]->name ?></span><span class="c-event__day"><?php echo get_the_date() ?></span></div>
              </div>
            </a>
          </div>
        <?php

        endwhile;
      endif;
      wp_reset_postdata()
      ?>
    </div>

  </div>

  <?php 
  the_posts_pagination();
  ?>
</section>

</div>

<div class="col-lg-4">
  <div class="mt-5">
    <ul class="c-menulist">
      <?php 
      wp_list_categories();
      ?>
    </ul>
  </div>
</div>
</div>
</div>
<?php get_footer() ?>

