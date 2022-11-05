<?php get_header() ?>

<div class="c-main-view">
    <div class="c-main-view__img">
        <img src="<?php echo esc_url(get_theme_file_uri('image/メインビジュアル/iStock-951304092.jpg')) ?>" alt="c-main-view">
    </div>
    <div class="c-main-view__text">
        <span>特別な一日を、</span>
        <span>特別なレストランで。</span>
    </div>
</div>
<main>
    <section class="l-section">
        <div class="l-container">
            <div class="c-popular">
                <div class="c-popular__head">
                    <div class="c-popular__title">
                        <h2>人気レストラン</h2>
                    </div>
                    <div class="c-popular__search">
                        <span>エリア絞り込み</span>
                        <form action="/index.php" method="get">
                            <select name="area_select" id="" onchange="search_form.submit()">
                                <option value="">すべてのエリア</option>
                                <?php
                                $terms = get_terms('area_category');
                                if ($terms) {
                                    foreach ($terms as $term) {
                                ?>
                                <option value="<?php echo esc_html($term->term_id) ?>">
                                    <?php echo esc_html($term->name) ?>
                                </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <button type="submit">決定</button>
                        </form>
                    </div>
                </div>



                <div class="c-card">

                    <?php
                    $args = [
                        'post_type' => 'restrant',
                        'posts_per_page' => 3,
                    ];
                    if ($_GET['area_select']) {
                        $args["tax_query"][] = [
                            'taxonomy' => "area_category",
                            'terms' => $_GET['area_select'],
                            'field' => "term_id"
                        ];
                    }

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                    ?>

                    <div href="" class="c-card__item">
                        <div class="c-card__img">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="image">
                        </div>
                        <div class="c-card__content">
                            <a href="<?php the_permalink() ?>" class="c-card__title"><?php the_title() ?></a>
                            <div class="c-card__text"><?php the_content() ?></div>
                            <div class="c-card__area">
                                <span>エリア：</span>
                                <?php
                                        $terms = get_the_terms(get_the_ID(), 'area_category');
                                        if ($terms) {
                                            foreach ($terms as $term) {
                                                echo '<span>';
                                                echo $term->name;
                                                echo '</span>';
                                            }
                                        }
                                        ?>
                            </div>
                            <div class="c-card__junre">
                                <span>ジャンル：</span>
                                <div class="c-card__junre-menu">
                                    <?php
                                            $terms = get_the_terms(get_the_ID(), 'junre_tag');
                                            if ($terms) {
                                                foreach ($terms as $term) {
                                                    echo '<span>';
                                                    echo $term->name;
                                                    echo '</span>';
                                                }
                                            }
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="l-section">
        <div class="l-container">
            <div class="c-new">
                <div class="c-new__head">
                    <div class="c-new__title">
                        <h2>新着レストラン</h2>
                    </div>
                </div>
                <div class="c-card">

                    <?php
                    $args = [
                        'post_type' => 'restrant',
                        'posts_per_page' => 3,
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                    ?>

                    <div class="c-card__item">
                        <div class="c-card__img">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="image">
                        </div>
                        <div class="c-card__content">
                            <div class="c-card__title"><?php the_title() ?></div>
                            <div class="c-card__text"><?php the_content() ?></div>
                            <div class="c-card__area">
                                <span>エリア：</span>
                                <?php
                                        $terms = get_the_terms(get_the_ID(), 'area_category');
                                        if ($terms) {
                                            foreach ($terms as $term) {
                                                echo '<span>';
                                                echo $term->name;
                                                echo '</span>';
                                            }
                                        }
                                        ?>
                            </div>
                            <div class="c-card__junre">
                                <span>ジャンル：</span>
                                <div class="c-card__junre-menu">
                                    <?php
                                            $terms = get_the_terms(get_the_ID(), 'junre_tag');
                                            if ($terms) {
                                                foreach ($terms as $term) {
                                                    echo '<span>';
                                                    echo $term->name;
                                                    echo '</span>';
                                                }
                                            }
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>



<?php get_footer() ?>
