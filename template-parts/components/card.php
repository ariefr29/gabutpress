<div class="card">
  <a class="hover:text-blue-500 transition duration-200" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
    <div class="gambar">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
      } else {
        echo '<img src="'.get_template_directory_uri().'/assets/img/no-image.jpg" alt="no image">';
      } ?>
    </div>
    <?php the_title('<h2 class="judul">', '</h2>'); ?>
  </a>
  <div class="desc"><?php the_excerpt();?></div>
  <div class="datetime"><span class="iconify mr-1" data-icon="bx:time-five"></span> <?php the_time( 'F j, Y' ); ?></div>
</div><!-- .card -->
