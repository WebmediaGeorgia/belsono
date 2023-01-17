<?php
/*
Template Name: Личная для доктора
Template Post Type: post
*/
?>

<?php get_header() ?>
<main class="main">

  <div class="title_block">
    <h1 class="title_name"><?php the_field('name_doctor'); ?></h1>
    <p class="title_border">
      <span class="line"></span>
      <span class="romb"></span>
      <span class="line"></span>
    </p>
  </div>

  <section class="destription_servise one_servise doctor_page_privat container">
    <div class="sign_to_doc">
      <div class="photo_dock">

        <picture>
          <source srcset="<?php the_field('photo'); ?>" type="image/webp"><img src="<?php the_field('photo'); ?>" alt="doc">
        </picture>
      </div>
      <a href="<?php $url = site_url('/onlinesign/');
                echo $url; ?>" class="sign">Записаться</a>
    </div>

    <div class="text">
      <h3 class="title_desk">Образование и профессиональная переподготовка:</h3>
      <h4 class="subtitle">Квалификационная категория, научные звания, награды, членство в медицинских сообществах.</h4>
      <p class="puncts"><?php the_field('category'); ?>
      </p>

      <h4 class="subtitle">Стаж работы по специальности</h4>
      <p class="puncts"><?php the_field('staz'); ?>
      </p>
      <?php the_field('opisanie_vracha'); ?>
    </div>
  </section>




</main>

<?php get_footer() ?>