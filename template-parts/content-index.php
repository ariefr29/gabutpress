<?php
/**
 * Template part for displaying Index (FrontPage)
 */
?>

<main class="container my-14">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 px-1">
    <?php $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post();
      $i++;
      if ($i === 1) {
        get_template_part( 'template-parts/components/card', 'panjang' );
      } else {
        get_template_part( 'template-parts/components/card' ); 
      }
    endwhile; endif; ?>
  </div><!-- .grid -->
</main>