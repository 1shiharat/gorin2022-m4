<?php get_header() ?>


<section class="l-section container mb-5">
  <div class="c-event">
    <div class="c-event__title">
      <h2 class="">お知らせ</h2>

    </div>

    <form action="<?php echo home_url('/event') ?>" method="get" class="my-3 d-flex">
      <?php
      $terms = get_terms('event-category');
      ?>
      <select class="w-50 form-select" aria-label="Default select example" name="category">
        <option value="">指定なし</option>
        <?php foreach ($terms as $term) : ?>
          <option <?php selected($term->term_id, filter_input(INPUT_GET,"category"), true) ?> value="<?php echo $term->term_id ?>"><?php echo $term->name ?></option>
        <?php endforeach ?>
      </select>
      <button class="btn btn-primary" type="submit">決定</button>
    </form>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $args = [
        'post_type' => 'event',
      ];

      $category = isset($_GET['category']) ? (int)$_GET['category'] : '';

      if ($category) {
        $args['tax_query'][] = [
          'taxonomy' => 'event-category',
          'field' => 'term_id',
          'terms' => $category
        ];
      }


      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();

      ?>
          <div class="col">
            <a href="<?php the_permalink() ?>" class="card">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail')) ?>) ?>" class="card-img-top" alt="...">
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

</section>

<?php get_footer() ?>