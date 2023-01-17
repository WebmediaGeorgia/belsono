<?php
/*
Template Name: Контакты
Template Post Type:  page
*/
?>

<?php get_header() ?>

<main class="main">
  <div class="container all_pages_title">
    <div class="title_block">
      <h1 class="title_name"> <?php the_field('zagolovok'); ?></h1>
      <p class="title_border">
        <span class="line"></span>
        <span class="romb"></span>
        <span class="line"></span>
      </p>
    </div>
  </div>
  <div class="container contacty_slider_page">
    <div class="swiper contacty_swiper_slider">
      <!-- Additional required wrapper -->
      <?php if (have_rows('slajder_s_kontaktami')) : ?>
        <div class="swiper-wrapper contacty_slider_wrapper">
          <!-- Slides -->
          <?php while (have_rows('slajder_s_kontaktami')) : the_row();
            
          ?>
          
          <div class="swiper-slide contacty_slider_slide">
          <div class="adress">
            <div class="img_adress">
              <picture>
                <source srcset="<?php the_sub_field('kartinka_mestopolozheniya'); ?>" type="image/webp"><img src="<?php the_sub_field('kartinka_mestopolozheniya'); ?>" alt="city">
              </picture>
            </div>
            <div class="city_block_fl">
            <?php the_sub_field('adres_i_telefony'); ?>
            </div>
          </div>
          <div class="map_adress">
          <?php the_sub_field('karta'); ?>

          </div>
        </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev contacty_slider-prev">
        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_75_811)">
            <g clip-path="url(#clip1_75_811)">
              <rect x="-1" y="1" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)" stroke="#058491" stroke-width="2" />
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
      <div class="swiper-button-next contacty_slider-next">
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
      <div class="swiper-pagination contacty_slider-pagination"></div>
    </div>
  </div>
</main>


<?php get_footer() ?>