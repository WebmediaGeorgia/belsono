<?php
/*
Template Name: О Белсоно
Template Post Type:  page
*/
?>

<?php get_header() ?>

<main class="main">
    <section class="banner_page">
      <h1 class="title container"><?php the_field('page_title'); ?></h1>
      <picture><source srcset="<?php the_field('img_for_banner'); ?>" type="image/webp"><img src="<?php the_field('img_for_banner'); ?>" alt="banner"></picture>
    </section>
    <section class="container content_about">
    <?php the_field('about_tsentr'); ?>
      <h4 class="title">В нашем центре проводится:</h4>
      <?php if (have_rows('list_servise')) : ?>
        <ul class="ul">
          <!-- Slides -->
          <?php while (have_rows('list_servise')) : the_row();

          ?>
           <li class="li"> <?php the_sub_field('one_servise'); ?></li>
          <?php endwhile; ?>
      </ul>
      <?php endif; ?>

      <p class="text" style="color: #1B1D21;padding-top: 24px;">Номер лицензии в ЕРЛ: <?php the_field('number_lisenze'); ?></p>
      

      <div class="slider_container">
        <div class="swiper mySert">
        <?php if (have_rows('sert_slider')) : ?>
          <div class="swiper-wrapper wrapper_mySert">
          <!-- Slides -->
          <?php while (have_rows('sert_slider')) : the_row();

          ?>
           <div class="swiper-slide slide_mySert"><picture><source srcset="<?php the_sub_field('sert_slide'); ?>" type="image/webp"><img src="<?php the_sub_field('sert_slide'); ?>" alt="sert"></picture></div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

          <div class="swiper-button-prev mySert-prev">
            <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_75_811)">
                <g clip-path="url(#clip1_75_811)">
                  <rect x="-1" y="1" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)" stroke="#058491"
                    stroke-width="2" />
                  <path d="M33.0664 19L22.9331 28.405L33.0664 38" stroke="#058491" stroke-width="2.53333" />
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
          <div class="swiper-button-next mySert-next">
            <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_75_806)">
                <rect x="1" y="1" width="54" height="54" rx="27" stroke="#058491" stroke-width="2" />
                <path d="M22.9336 19L33.0669 28.405L22.9336 38" stroke="#058491" stroke-width="2.53333" />
              </g>
              <defs>
                <clipPath id="clip0_75_806">
                  <rect width="56" height="56" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="swiper-pagination mySert-pagination"></div>
        </div>
      </div>
    </section>


  </main>


<?php get_footer()?>