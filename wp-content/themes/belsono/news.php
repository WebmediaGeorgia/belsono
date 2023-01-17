<?php
/*
Template Name: Новости и статьи
Template Post Type: page
*/
?>

<?php get_header() ?>

<main class="main">

<section class="news news_one_page">
    <div class="content container">
      <div class="title_block">
        <h1 class="title_name">Новости и статьи</h1>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>
      <div class="news_block">
      <?php
          global $post;

          $myposts = get_posts([
            'posts_per_page' =>-1,
            'order' => 'DESC',
            'category_name' => 'news',
            'post_type' => 'post',
          ]);

          foreach ($myposts as $post) {
            setup_postdata($post);
          ?>

            <div class="news_item">
              <div class="img">
                <picture>
                  <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
                </picture>
              </div>
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
      <p  class="btn sign more_news ">Показать еще</p>
    </div>
  </section>



</main>


<?php get_footer()?>