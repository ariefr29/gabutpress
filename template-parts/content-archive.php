<?php
/**
 * Template part for displaying Index (FrontPage)
 */ ?>


<main class="container my-14">
  <div class="font-semibold text-gray-400 dark:text-gray-700">
    <?php if (is_search()) {
      echo "<h3>Search : " . get_search_query() . "</h3>";
    } elseif (is_archive()) {
      the_archive_title('<h3>','</h3>');
    } ?>
  </div>

  <div class="mt-5 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 px-1">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/components/card' ); 
    endwhile; endif; ?>
  </div><!-- .grid -->
</main>