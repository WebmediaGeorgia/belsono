<?php
/*
Template Name: Одна услуга
Template Post Type: post
*/
?>

<?php get_header() ?>

<main class="main one_servise">
    <section class="banner_page ">
      <h1 class="title container"><?php the_field('nazvanie_uslugi'); ?></h1>
      <picture><source srcset="<?php the_field('kartinka_dlya_bannera'); ?>" type="image/webp"><img src="<?php the_field('kartinka_dlya_bannera'); ?>" alt="banner"></picture>
    </section>
    <section class="destription_servise container">

    <?php the_field('o_napravlenii'); ?>
    <?php if (have_rows('czeny')) : ?>
      <div class="bottom">
            <div class="content_member">
              <p class="titlememberk">
                Стоимость услуг <br>
                Цены актуальны на <?php the_field('data_czeny'); ?>. Точные цены узнавайте в регистратуре по телефонам нашего центра
              </p>

              <?php if (have_rows('czeny')) : ?>
          <?php while (have_rows('czeny')) : the_row();
          
          ?>
          <p class="item"><span class="name_serv"><?php the_sub_field('nazvanie_protsedur'); ?></span> <span class="price"><?php the_sub_field('czena_proczedury'); ?></span></p>
          <?php endwhile; ?>
      <?php endif; ?>
            </div>
            <div class="btn_open">Посмотреть все услуги</div>
          
          </div>
<?php endif; ?>
        

    </section>
    <section class="sign_block">
<div class="content">
    <div class="block_item">
        <h5 class="title_sign">Записаться на консультацию</h5>
        <p class="subtitle">Записаться на прием в клинику <b>“Белсоно” </b> можно через форму онлайн или по телефону:</p>
        <p class="phone"> <a href="tel:7845">7845</a> единый номер Гомель</p>
        <a href="<?php $url = site_url('/onlinesign/'); echo $url; ?>" class="btn sign">ЗАПИСАТЬСЯ</a>
    </div>
</div>

    </section>
  </main>
<?php get_footer()?>