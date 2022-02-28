<?php get_header(); 


if (is_search() || is_archive()):
  // display for (page) Search and Archive
  get_template_part( 'template-parts/content', 'archive' );

else:
  // display for Index (frontpage)
  if (get_option('set_profile') == 'yes') {
    get_template_part( 'template-parts/about' );
  }
  get_template_part( 'template-parts/content', 'index' );

  the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __('Prev'),
    'next_text' => __('Next'),
    'screen_reader_text' => '',
  ));
endif;


get_footer(); ?>
