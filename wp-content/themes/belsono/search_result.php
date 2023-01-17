<?php
/*
Template Name: Результаты поиска
Template Post Type: page
*/
?>

<?php get_header() ?>
<main class="main">

<div class="title_block">
        <h1 class="title_name">Результаты поиска</h1>
        <p class="title_border">
          <span class="line"></span>
          <span class="romb"></span>
          <span class="line"></span>
        </p>
      </div>

      <div class="container">
<?php echo do_shortcode( '[searchandfilter id="359" show="results"]' ); ?>

      </div>




</main>

<?php get_footer()?>