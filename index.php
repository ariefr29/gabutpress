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
endif;

the_posts_pagination( array(
  'mid_size' => 2,
  'prev_text' => esc_attr__( 'Prev', 'gabutpress' ),
  'next_text' => esc_attr__( 'Next', 'gabutpress' ),
));

echo '<div class="hidden">';
$args = array (
  'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', 'gabutpress' ) . '</span>',
  'after'             => '</div>',
  'link_before'       => '<span class="page-link">',
  'link_after'        => '</span>',
  'next_or_number'    => 'next',
  'separator'         => ' | ',
  'nextpagelink'      => __( 'Next &raquo', 'gabutpress' ),
  'previouspagelink'  => __( '&laquo Previous', 'gabutpress' ),
);
wp_link_pages( $args );
echo '</div>';


get_footer(); ?>
