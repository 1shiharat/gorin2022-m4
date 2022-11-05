<?php get_header(); ?>
<section class="l-section">
    <div class="l-container">
        <div class="c-archive">
            <div class="c-archive__title">
                <h2>レストラン一覧</h2>
            </div>
        </div>

        <div class="c-archive-card">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div href="" class="c-archive-card__item">
                <div class="c-archive-card__img">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" alt="image">
                </div>
                <div class="c-archive-card__content">
                    <a href="<?php the_permalink() ?>" class="c-archive-card__title"><?php the_title() ?></a>
                    <div class="c-archive-card__text"><?php the_content() ?></div>
                    <div class="c-archive-card__area">
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
                    <div class="c-archive-card__junre">
                        <span>ジャンル：</span>
                        <div class="c-archive-card__junre-menu">
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
            <?php endwhile;
            endif; ?>
        </div>
    </div>

</section>

<?php
// $args = array(
//     'mid_size' => 2, /* 現在のページの左右に表示するページ数 */
//     'prev_text' => '<<', /* 「前へ」にあたるページ用テキスト */
//     'next_text' => '>>', /* 「次へ」にあたるページ用テキスト */
// );
the_posts_pagination()
?>

<?php get_footer(); ?>
