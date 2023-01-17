<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>

<body class="wrapper">
  <header class="header " id="head">
    <div class="header_top">
        <div class="header_top_content container">
            <div class="link_for_eyes"><svg class="eye_svg"  viewBox="0 0 29 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5002 17.7692C15.1162 17.7692 15.6155 17.2009 15.6155 16.4999C15.6155 15.799 15.1162 15.2307 14.5002 15.2307C13.8841 15.2307 13.3848 15.799 13.3848 16.4999C13.3848 17.2009 13.8841 17.7692 14.5002 17.7692Z" fill="#058491"/>
                <path d="M14.5001 11.4231C12.0463 11.4231 10.0386 13.7077 10.0386 16.5C10.0386 19.2923 12.0463 21.5769 14.5001 21.5769C16.954 21.5769 18.9617 19.2923 18.9617 16.5C18.9617 13.7077 16.954 11.4231 14.5001 11.4231ZM14.5001 20.3077C12.6039 20.3077 11.154 18.6577 11.154 16.5C11.154 14.3423 12.6039 12.6923 14.5001 12.6923C16.3963 12.6923 17.8463 14.3423 17.8463 16.5C17.8463 18.6577 16.3963 20.3077 14.5001 20.3077Z" fill="#058491"/>
                <path d="M14.5 7.61536C4.46154 7.61536 0 16.5 0 16.5C0 16.5 4.46154 25.3846 14.5 25.3846C24.5385 25.3846 29 16.5 29 16.5C29 16.5 24.5385 7.61536 14.5 7.61536ZM14.5 24.1154C5.57692 24.1154 1.33846 16.5 1.33846 16.5C1.33846 16.5 5.57692 8.88459 14.5 8.88459C23.4231 8.88459 27.6615 16.5 27.6615 16.5C27.6615 16.5 23.4231 24.1154 14.5 24.1154Z" fill="#058491"/>
                </svg><?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' );?></div>
       

        <div class="chose_sity">
            <span class="sity_chos">
                Выберите город:
            </span>
            <span class="sity ">
                Гомель
            </span>
            <span class="sity">
                Мозырь
            </span>
            <span class="sity">
                Солигорск
            </span>
        </div>
    </div></div>
    <div class="header_down">
        <div class="header_down_content container">
            <a href="<?php $url = site_url(''); echo $url; ?>" class="header_logo"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/лого.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/лого.png" alt="logo"></picture></a>
            <nav class="nav">
                <a href="<?php $url = site_url('#uslugi_all'); echo $url; ?>" class="nav_link">Услуги и цены</a>
                <a href="<?php $url = site_url('/about_belsono/'); echo $url; ?>" class="nav_link">О нас</a>
                <a href="<?php $url = site_url('/doctors/'); echo $url; ?>" class="nav_link">Врачи</a>
                <a href="<?php $url = site_url('/onlinesign/'); echo $url; ?>" class="nav_link">Запись на прием</a>
                <a href="<?php $url = site_url('#news'); echo $url; ?>" class="nav_link">Для пациентов</a>
                <a href="<?php $url = site_url('/contacts/'); echo $url; ?>" class="nav_link">Контакты</a>
            </nav>
            <div class="search_block">
                <div class="menu_icon icon-menu">
                    <span></span>
                </div>
                <p  class="phone_link" ><svg  viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.83778 11.4013L12.9906 15.7727C13.4408 16.2466 14.2563 16.3143 15.1647 15.8677C17.4766 14.9116 18.2458 14.6785 18.6849 15.1407L23.4586 20.1657C24.0229 20.7596 23.8723 21.749 23.2413 22.4132C19.9648 25.8623 14.6391 25.8623 11.3626 22.4132L2.4451 13.0264C-0.815034 9.59469 -0.815034 4.04279 2.4451 0.611069C3.08943 -0.0671682 4.07891 -0.234049 4.66446 0.382314L9.43816 5.40726C9.85192 5.8428 9.63006 6.65402 8.7267 9.07108C8.30675 10.0146 8.37404 10.9131 8.83778 11.4013Z" fill="#058491"/>
                    </svg></p>
                <!-- <input type="search" class="input_search"> -->

             <div class="input_search"><?php echo do_shortcode( '[searchandfilter id="359"]' ); ?></div>
                
                
            </div>
        </div>
    </div>
</header>