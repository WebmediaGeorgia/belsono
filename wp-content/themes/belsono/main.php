<?php
/*
Template Name: Главная страница
Template Post Type:  page
*/
?>

<?php get_header() ?>


<main class="main">
  <section class="banner_container">
    <!-- Slider main container -->
    <div class="swiper banner_slider">
      <!-- Additional required wrapper -->


      <?php if (have_rows('slider')) : ?>
        <div class="swiper-wrapper banner_wrapper">
          <!-- Slides -->
          <?php while (have_rows('slider')) : the_row();
            $link_to_servise = get_sub_field('link_to_servise');
          ?>
            <div class="swiper-slide banner_slide">
              <div class="slide_content">
                <h2 class="title"><?php the_sub_field('title_servis'); ?></h2>
                <p class="subtitle"><?php the_sub_field('opisanie_uslugi'); ?></p>
                <div class="btn_nav">
                  <a href="<?php $url = site_url('/' . $link_to_servise . '/');
                            echo $url; ?>" class="more_info">Подробнее</a>
                  <a href="<?php $url = site_url('/onlinesign/');
                            echo $url; ?>" class="sign">Записаться</a>
                </div>
              </div>
              <picture>
                <source srcset="<?php the_sub_field('img_for_slide'); ?>" type="image/webp"><img class="base1" src="<?php the_sub_field('img_for_slide'); ?>" alt="slider" />
              </picture>
              <picture>
                <source srcset="<?php bloginfo("template_url"); ?>/assets/img/Base.webp" type="image/webp"><img class="base2" src="<?php bloginfo("template_url"); ?>/assets/img/Base.png" alt="base" />
              </picture>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev banner-button-prev">
      <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_75_811)">
          <g clip-path="url(#clip1_75_811)">
            <rect x="-1" y="1" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)" stroke="white" stroke-width="2" />
            <path d="M33.0664 19L22.9331 28.405L33.0664 38" stroke="white" stroke-width="2.53333" />
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
    <div class="swiper-button-next banner-button-next">
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
    </div>
  </section>
  <section class="block_sign">
    <div class="container content">
      <div class="blocks">
        <h2 class="title">Запишитесь на прием</h2>
        <p class="content_text">Записаться на прием в <span>клинику “Белсоно”</span> можно через форму онлайн или по телефону</p>
        <a href="<?php $url = site_url('/onlinesign/');
                  echo $url; ?>" class="btn more_info">ЗАПИСАТЬСЯ НА ПРИЕМ </a>
      </div>
      <div class="blocks">
        <h2 class="title">Телефон клиники</h2>
        <div class="block_fl">
          <div>
            <?php the_field('gomel_phones'); ?>
          </div>
          <div>
            <?php the_field('mozyr_phones'); ?>
            <?php the_field('soligorsk_phones'); ?>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="container content">
      <div class="title_block">
        <h2 class="title_name"> <?php the_field('block_title_benefits'); ?></h2>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>
      <div class="benefit_items">
        <div class="item">
          <div class="icon one">
            <picture>
              <source srcset="<?php bloginfo("template_url"); ?>/assets/img/icon_1.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/icon_1.png" alt="icon">
            </picture>
          </div>
          <p class="text">
            <?php the_field('benefits_one'); ?>
          </p>
        </div>
        <div class="item">
          <div class="icon two">
            <picture>
              <source srcset="<?php bloginfo("template_url"); ?>/assets/img/icon_2.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/icon_2.png" alt="icon">
            </picture>
          </div>
          <p class="text">
            <?php the_field('benefits_two'); ?>
          </p>
        </div>
        <div class="item ">
          <div class="icon three">
            <picture>
              <source srcset="<?php bloginfo("template_url"); ?>/assets/img/icon_3.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/icon_3.png" alt="icon">
            </picture>
          </div>
          <p class="text">
            <?php the_field('benefits_three'); ?>
          </p>
        </div>
        <div class="item">
          <div class="icon four">
            <picture>
              <source srcset="<?php bloginfo("template_url"); ?>/assets/img/icon_4.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/icon_4.png" alt="icon">
            </picture>
          </div>
          <p class="text">
            <?php the_field('benefits_four'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="uslugi_all">
    <a href="#" id="uslugi_all" class="ancor"></a>
    <div class="container content">
      <div class="title_block">
        <h2 class="title_name">Услуги нашей клиники</h2>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>
      <div class="blocks_usl">
        <?php
        global $post;

        $myposts = get_posts([
          'posts_per_page' => -1,
          'order' => 'ASC',
          'category_name' => 'servise',
          'post_type' => 'post',
        ]);

        foreach ($myposts as $post) {
          setup_postdata($post);
        ?>
          <a href="<?php the_permalink(); ?>" class="item">
            <div class="icon">
              <picture>
                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp"><img src="<?php echo get_the_post_thumbnail_url();
                                                                                                          ?>" alt="usl">
              </picture>
            </div>
            <p class="text"><?php the_title(); ?></p>
          </a>

        <?php
        }
        wp_reset_postdata();
        ?>

      </div>

      <div class="btn sign">ВСЕ УСЛУГИ</div>



    </div>
  </section>
  <section class="doctors_slider_container">
    <div class="container">
      <div class="title_block">
        <h2 class="title_name">Врачи</h2>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>

      <div class="swiper doctors_slider_slider " data-sity="Гомель">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper doctors_slider_wrapper">
          <!-- Slides -->
          <?php
          global $post;

          $myposts = get_posts([
            'posts_per_page' => -1,
            'order' => 'ASC',
            'category_name' => 'doctors',
            'post_type' => 'post',
            
          ]);

          foreach ($myposts as $post) {
            setup_postdata($post);
          ?>
            <div class="swiper-slide doctors_slider_slide">
              <div class="photo">
                <picture>
                  <source srcset="<?php the_field('photo'); ?>" type="image/webp"><img src="<?php the_field('photo'); ?>" alt="photo" />
                </picture>
              </div>
              <div class="about_doctor">
                <p class="name"><?php the_title(); ?></p>
                <p class="proff"><?php the_field('dolznost'); ?></p>
                <p class="stazh"><?php the_field('staz'); ?></p>
                <p class="category"><?php the_field('category'); ?></p>
                <a href="<?php the_permalink(); ?>" class="more_info">ПОДРОБНЕЕ</a>
              </div>
            </div>


          <?php
          }
          wp_reset_postdata();
          ?>

        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev doctors_slider-prev">
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
        <div class="swiper-button-next doctors_slider-next">
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
        <div class="swiper-pagination doctors_slider-pagination"></div>
      </div>
    </div>
  </section>
  <section class="doctir_img">
    <div class="container content">
      <div class="block_arrow">
        <p class="title">Записаться <br> на прием</p>
        <a href="<?php $url = site_url('/onlinesign/');
                  echo $url; ?>" class="btn sign">ЗАПИСАТЬСЯ К ВРАЧУ</a>

      </div>
      <div class="block_img">

      </div>
      <div class="block_tel">
        <h2 class="title">Cвязаться с нами</h2>
        <?php the_field('gomel_phones'); ?>
        <?php the_field('mozyr_phones'); ?>
        <?php the_field('soligorsk_phones'); ?>
      </div>
    </div>
  </section>
  <section class="all_med_centre">
    <div class="container">
      <div class="title_content ">
        <h2 class="title">Адреса медицинских центров</h2>
        <div class="toggle_slider"><span class="active spisok">Списком</span> <div class="toggler"> <p class="toggl"></p></div> <span class="mapp">На карте</span></div>
      </div>
      <div class="slider_content">
        <div class="all_centre_swiper swiper">
          <?php if (have_rows('adrese_slider')) : ?>
            <div class="all_centre_wrap swiper-wrapper">
              <!-- Slides -->
              <?php while (have_rows('adrese_slider')) : the_row();
              ?>
                <?php the_sub_field('address_map_phone'); ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <div class="swiper-button-prev all_centre_slider-prev">
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
          <div class="swiper-button-next all_centre_slider-next">
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
          <div class="swiper-pagination all_centre_slider-pagination"></div>
        </div>
      </div>
      <!-- ...... -->
      <div class="container contacty_slider_page">
    <div class="swiper contacty_swiper_slider">
      <!-- Additional required wrapper -->
      <?php if (have_rows('slajder_s_kontaktami',11)) : ?>
        <div class="swiper-wrapper contacty_slider_wrapper">
          <!-- Slides -->
          <?php while (have_rows('slajder_s_kontaktami',11)) : the_row();
            
          ?>
          
          <div class="swiper-slide contacty_slider_slide">
          <div class="adress">
            <div class="img_adress">
              <picture>
                <source srcset="<?php the_sub_field('kartinka_mestopolozheniya',11); ?>" type="image/webp"><img src="<?php the_sub_field('kartinka_mestopolozheniya',11); ?>" alt="city">
              </picture>
            </div>
            <div class="city_block_fl">
            <?php the_sub_field('adres_i_telefony',11); ?>
            </div>
          </div>
          <div class="map_adress">
          <?php the_sub_field('karta',11); ?>

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
      <!-- ////// -->
    </div>
  </section>
  <section class="otzyvy">
    <div class="container content">
      <div class="title_block">
        <h2 class="title_name">Отзывы</h2>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>
      <div class="swiper otzyvySlider">
        <div class="swiper-wrapper my_otzyvy_wrap">

          <?php
          global $post;

          $myposts = get_posts([
            'posts_per_page' => -1,
            'order' => 'ASC',
            'category_name' => 'otzyvy',
            'post_type' => 'post',
          ]);

          foreach ($myposts as $post) {
            setup_postdata($post);
          ?>
            <div class="swiper-slide my_otzyvy_slide">
              <div class="photo">
                <picture>
                  <source srcset="<?php bloginfo("template_url"); ?>/assets/img/img_person.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/img_person.png" alt="img">
                </picture>
              </div>
              <div class="content_otzyv">
                <p class="name"><?php the_field('name'); ?></p>
                <p class="date"><?php the_field('date'); ?></p>
                <div class="text_wrap">
                  <p class="text">
                    <?php the_field('text'); ?>
                  </p>

                </div>
                <a href="#" class="link_to_otzyv">Читать полностью</a>
              </div>
            </div>



          <?php
          }
          wp_reset_postdata();
          ?>

        </div>
        <div class="swiper-button-next my_otzyvy_slide_next">


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
        <div class="swiper-button-prev my_otzyvy_slide_prev">
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
        <div class="swiper-pagination my_otzyvy_slide_pagin"></div>
      </div>

      <a href="https://yandex.by/maps/org/belsono/1711168621/reviews/?ll=30.966041%2C52.456824&z=16" target="_blank" class="btn sign">НАПИСАТЬ ОТЗЫВ</a>

    </div>
  </section>
  <section class="news">
    <a href="#" id="news" class="ancor"></a>
    <div class="content container">
      <div class="title_block">
        <h2 class="title_name">Новости и статьи</h2>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>

      <div class="news_block_block">
        <div class="news_block">
          <?php
          global $post;

          $myposts = get_posts([
            'posts_per_page' => 8,
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
      </div>

      <a href="<?php $url = site_url('/news/');
                  echo $url; ?>" class="btn sign">Все новости</a>
    </div>
  </section>





</main>
<?php get_footer() ?>