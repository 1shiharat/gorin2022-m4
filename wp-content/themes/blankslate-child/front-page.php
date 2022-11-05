<?php get_header() ?>
<main>
  <div class="c-main-view">
    <div class="c-main-view__content">
      <div class="d-flex  flex-column justify-content-center align-items-center">
        <h2>Making Show</h2>
        <div>2022.12.10 - 2022.12.25</div>
        <a href="<?php echo home_url('/ticket') ?>" class="mt-3 btn btn-xlg btn-primary">チケット購入はこちら</a>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="c-main-view__img carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/close-up-of-person-s-hand-making-handmade-headbands.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/crocheting-ge718ca30f_1920.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/home-thread-g7321d5b07_1920.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <section class="l-section container">
    <div class="c-event">
      <div class="c-event__title">
        <h2 class="">お知らせ</h2>
      </div>


      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $args = [
          'post_type' => 'event',
          'posts_per_page' => 3
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
                  <div class="c-event__card-footer d-flex justify-content-between"><span class="c-event__category"><?php echo get_the_terms(get_the_ID(), 'event-category')[0]->name ?></span><span class="c-event__day"><?php echo get_the_date() ?></span></div>
                </div>
              </div>
            </div>
        <?php

          endwhile;
        endif;
        wp_reset_postdata()
        ?>
      </div>

      <div class="c-event__btn">
        <a href="" class="btn btn-xlg btn-primary">お知らせ一覧を見る</a>
      </div>

    </div>

  </section>
  <section class="l-section container">
    <div class="c-booth">
      <div class="c-booth__title">
        <h2>企業ブース紹介</h2>
      </div>
      <div class="c-booth__content">
        <div class="c-booth__text">
          <p>紹介はこちら！！ てきすとてきすとてきすとてきすとてきすとてきすとてきすとてきすと</p>
          <a href="" class="btn btn-xlg btn-primary">企業ブース紹介を見る</a>
        </div>
        <div class="c-booth__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/thread-gf1eea1af3_1920.jpg')) ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="l-section">
    <div class="c-tiket">
      <div class="c-tiket__content">
        <div class="c-tiket__title">
          <h2>ご来場の方へ</h2>
        </div>
        <p>ご来場にはチケットが必要です</p>
        <a href="<?php echo home_url('/ticket') ?>" class="btn btn-xlg btn-primary">チケット購入はこちら</a>
      </div>
      <div class="c-tiket__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/home-thread-g7321d5b07_1920.jpg')) ?>" alt="">
      </div>
    </div>
  </section>
</main>


<?php get_footer() ?>