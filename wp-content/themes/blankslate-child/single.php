<?php get_header() ?>
<main>
    <div class="l-section">
        <div class="l-container">
            <div class="c-single">
                <div class="c-single__img">
                    <img src="<?php echo esc_html(get_the_post_thumbnail_url()) ?>" alt="image">
                </div>
                <div class="c-single__title">
                    <h2><?php the_title() ?></h2>
                </div>
                <div class="c-single__text"><?php the_content() ?></div>
                <div class="c-single__area">
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
                <div class="c-single__junre">
                    <span>ジャンル：</span>
                    <div class="c-single__junre-menu">
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
                <div class="c-single__tel"><?php the_field('tel') ?></div>
                <div class="c-single__mail"><?php the_field('mail') ?></div>

            </div>
        </div>
    </div>
    <div class="l-container">
        <div class="c-archive-link">

        </div>
    </div>

    <section class="l-section">
        <div class="l-container">
            <div class="c-info">
                <div class="c-info__title">
                    <h2>お問い合わせ</h2>
                </div>
                <div class="c-info__content">
                    <?php
                    $restrant_name = get_the_title();
                    ?>
                    <?php echo do_shortcode('[contact-form-7 id="43" title="レストランへのお問い合わせ"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
