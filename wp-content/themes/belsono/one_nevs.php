<?php
/*
Template Name: Одна новость или статья
Template Post Type: post
*/
?>

<?php get_header() ?>

<main class="main one_servise">
        <section class="banner_page ">
     
            <picture><source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="banner"></picture>
        </section>
        <section class="destription_servise container">

            <h1 class="title_desk"><?php the_title(); ?></h1>
            <p class="data_news"> <?php the_field('data_novosti'); ?></p>
            <div class="text">
            <?php the_field('novostnoj_kontent'); ?>
            </div>
        </section>
        <section class="other_news">
            <div class="container">
                <div class="swiper_other_news swiper">
                    <div class="news_block swiper-wrapper">
                    <?php
        global $post;

        $myposts = get_posts([
          'posts_per_page' => 4,
          'order' => 'DESC',
          'post__not_in' => array($post->ID),
          'category_name' => 'news',
          'post_type' => 'post',
        ]);

        foreach ($myposts as $post) {
          setup_postdata($post);
        ?>

<div class="swiper-slide news_item">
                            <div class="img"><picture><source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"></picture></div>
                            <h5 class="title"><?php the_title(); ?></h5>
                            <div class="date">
                                <p class="time"><?php the_field('data_novosti'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="link_to_news">Подробнее</a>
                            </div>
                        </div>

        <?php
        }
        wp_reset_postdata();
        ?>
  
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev news_slider-prev">
                        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_75_811)">
                                <g clip-path="url(#clip1_75_811)">
                                    <rect x="-1" y="1" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                                        stroke="#058491" stroke-width="2" />
                                    <path d="M33.0664 19L22.9331 28.405L33.0664 38" stroke="#058491"
                                        stroke-width="2.53333" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_75_811">
                                    <rect width="56" height="56" fill="white" transform="matrix(-1 0 0 1 56 0)" />
                                </clipPath>
                                <clipPath id="clip1_75_811">
                                    <rect width="56" height="56" fill="white" transform="matrix(-1 0 0 1 56 0)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="swiper-button-next news_slider-next">
                        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_75_806)">
                                <rect x="1" y="1" width="54" height="54" rx="27" stroke="#058491" stroke-width="2" />
                                <path d="M22.9336 19L33.0669 28.405L22.9336 38" stroke="#058491"
                                    stroke-width="2.53333" />
                            </g>
                            <defs>
                                <clipPath id="clip0_75_806">
                                    <rect width="56" height="56" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="swiper-pagination news_slider-pagination"></div>
                </div>
            </div>

        </section>

    </main>


<?php get_footer()?>