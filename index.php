<?php get_header(); 


if (is_search() || is_archive()):
  // display for (page) Search and Archive
  get_template_part( 'template-parts/content', 'archive' );

else:
  // display for Index (frontpage)
  get_template_part( 'template-parts/content', 'index' );
endif;


get_footer(); ?>
