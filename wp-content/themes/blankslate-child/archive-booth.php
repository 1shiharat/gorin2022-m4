<?php get_header() ?>


<section class="l-section container mb-5">
  <div class="c-booth">
    <div class="c-event__title">
      <h2 class="">企業ブース一覧</h2>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $args = [
        'post_type' => 'booth',
      ];


      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();

      ?>
          <div class="col">
            <div class="card">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')) ?>) ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <div class="c-event__card-footer d-flex justify-content-between"><span class="c-event__category"><?php echo get_field('company') ?></span><span class="c-event__category"><?php echo get_field('booth_num') ?></span></div>
              </div>
            </div>
          </div>
      <?php

        endwhile;
      endif;
      wp_reset_postdata()
      ?>
    </div>

  </div>

</section>

<?php get_footer() ?>