<?php get_header() ?>
<main>
  <div class="c-main-view">
    <div class="c-main-view__content">
      <div class="d-flex  flex-column justify-content-center align-items-center">
        <p class="c-lead fs-5">すべてのクリエイターやファンをリアルでつなげる。</p>
        <h2>Making Show</h2>
        <div>2022.11.05 (土) 11:00〜20:00<br>2022.11.06 (日) 10:00〜20:00</div>
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
      <div class="c-event__title mb-4">
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

      <div class="c-event__btn">
        <a href="<?php echo esc_url( home_url("/event/") ) ?>" class="btn btn-xlg btn-primary">お知らせ一覧を見る</a>
      </div>

    </div>

  </section>
  <section class="l-section  pt-5 pb-5 ">
    <div class="container">
    <div class="c-booth">
      <div class="c-booth__title">
        <h2>開催情報</h2>
      </div>
      <div class="c-booth__content">
        <div class="c-booth__text">
          <table class="table">
            <tr>
              <th>会場/アクセス</th>
              <td>
                幕張メッセ 国際展示場 展示ホール1〜3<br>
                千葉県千葉市美浜区中瀬2丁目1<br>
                JR京葉線『海浜幕張駅』から徒歩約5分（東京から快速利用で約30分）<br>
                JR総武線・京成線『幕張本郷駅』から『幕張メッセ中央』行きバスで約17分
              </td>
            </tr>
            <tr>
              <th>ブース数(2日間合計)</th>
              <td>
                企業ブース : 25ブース<br>
                一般出店 : 1,800ブース<br>
                ※ ブース配置はパンフレットをご参照ください。
              </td>
            </tr>
            <tr>
              <th>入場料</th>
              <td>
                1日券: 700円<br>
                2日通し券: 1,200円<br>
                ※前売り券は100円引き
              </td>
            </tr>
            <tr>
              <th>主催</th>
              <td>
                Making Show実行委員会
              </td>
            </tr>
          </table>
        </div>
        <div class="c-booth__img">
          <img src="https://www.bushikaku.net/images/expedition/venue/261004.jpg" alt="">
        </div>
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
        <p>創作を通して、次の創作が生まれていく。そんな世界を作りませんか？</p>
        <a href="<?php echo home_url('/ticket') ?>" class="btn btn-xlg btn-primary">チケット購入はこちら</a>
      </div>
      <div class="c-tiket__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/m4-image/bg-ticket.jpg')) ?>" alt="">
      </div>
    </div>
  </section>
</main>


<?php get_footer() ?>