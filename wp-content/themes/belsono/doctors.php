<?php
/*
Template Name: Доктора
Template Post Type:  page
*/
?>

<?php get_header() ?>

<main class="main">
  <section class="banner_page">
    <h1 class="title container">Врачи</h1>
    <picture>
      <source srcset="<?php bloginfo("template_url"); ?>/assets/img/docnew.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/docnew.png" alt="banner">
    </picture>
  </section>
  <section class="all_doctors_block gomel container"  data-sity="Гомель">
    <div class="content">
      <?php
      global $post;

      $myposts = get_posts([
        'posts_per_page' => -1,
        'order' => 'DESC',
        'category_name' => 'doctors',
        'post_type' => 'post',
        'tag'    => 'gomel',
      ]);

      foreach ($myposts as $post) {
        setup_postdata($post);
      ?>
        <div onclick="window.location.href = '<?php the_permalink(); ?>'" class="item">
          <div class="photo">
            <picture>
              <source srcset="<?php the_field('photo'); ?>" type="image/webp"><img src="<?php the_field('photo'); ?>" alt="doc">
            </picture>
          </div>
          <p class="name"><?php the_title(); ?>
          </p>
          <p class="staz"><?php the_field('staz'); ?></p>
          <p class="proff"><?php the_field('dolznost'); ?>
          </p>
          <a href="<?php $url = site_url('/onlinesign/');
                    echo $url; ?>" class="sign">Записаться</a>
        </div>




      <?php
      }
      wp_reset_postdata();
      ?>

    </div>
    <div class="btn  more_info gomel">Показать еще</div>

  </section>

  <section class="all_doctors_block mozyr container"  data-sity="Мозырь">
    <div class="content">
      <?php
      global $post;

      $myposts = get_posts([
        'posts_per_page' => -1,
        'order' => 'DESC',
        'category_name' => 'doctors',
        'post_type' => 'post',
        'tag'    => 'mozyr',
      ]);

      foreach ($myposts as $post) {
        setup_postdata($post);
      ?>
        <div onclick="window.location.href = '<?php the_permalink(); ?>'" class="item">
          <div class="photo">
            <picture>
              <source srcset="<?php the_field('photo'); ?>" type="image/webp"><img src="<?php the_field('photo'); ?>" alt="doc">
            </picture>
          </div>
          <p class="name"><?php the_title(); ?>
          </p>
          <p class="staz"><?php the_field('staz'); ?></p>
          <p class="proff"><?php the_field('dolznost'); ?>
          </p>
          <a href="<?php $url = site_url('/onlinesign/');
                    echo $url; ?>" class="sign">Записаться</a>
        </div>




      <?php
      }
      wp_reset_postdata();
      ?>

    </div>
    <div class="btn  more_info mozyr">Показать еще</div>

  </section>


  <section class="all_doctors_block solygorsk container"  data-sity="Солигорск">
    <div class="content">
      <?php
      global $post;

      $myposts = get_posts([
        'posts_per_page' => -1,
        'order' => 'DESC',
        'category_name' => 'doctors',
        'post_type' => 'post',
        'tag'    => 'solygorsk',
      ]);

      foreach ($myposts as $post) {
        setup_postdata($post);
      ?>
        <div onclick="window.location.href = '<?php the_permalink(); ?>'" class="item">
          <div class="photo">
            <picture>
              <source srcset="<?php the_field('photo'); ?>" type="image/webp"><img src="<?php the_field('photo'); ?>" alt="doc">
            </picture>
          </div>
          <p class="name"><?php the_title(); ?>
          </p>
          <p class="staz"><?php the_field('staz'); ?></p>
          <p class="proff"><?php the_field('dolznost'); ?>
          </p>
          <a href="<?php $url = site_url('/onlinesign/');
                    echo $url; ?>" class="sign">Записаться</a>
        </div>




      <?php
      }
      wp_reset_postdata();
      ?>

    </div>
    <div class="btn  more_info solygorsk">Показать еще</div>

  </section>



</main>


<?php get_footer() ?>