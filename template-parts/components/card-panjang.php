<div class="card col-span-full md:flex mb-10">
  <div class="md:w-2/4 md:pr-7">
    <a class="hover:text-blue-500 transition duration-200" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
      <div class="gambar">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail();
        } else {
          echo '<img src="'.get_template_directory_uri().'/assets/img/no-image.jpg" alt="no image">';
        } ?>
      </div>
    </a>
  </div><!-- .md:w-2/4 -->
  <div class="md:w-2/4">  
    <a class="hover:text-blue-500 transition duration-200" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
      <h2 class="text-3xl font-semibold my-4 line-clamp-2"><?php the_title(); ?></h2>
    </a>
    <div class="text-sm text-gray-400 flex items-center my-3 dark:text-gray-500">
      <span class="iconify mr-1" data-icon="bx:time-five"></span> 
      <?php the_time( 'F j, Y' ); ?>
    </div>
    <div class="text-gray-600 leading-7 dark:text-gray-400 line-clamp-4">
      <?php the_excerpt(); ?>
    </div>
    <a class="mt-4 py-4 px-5 leading-none border-2 text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white transition duration-150 inline-block rounded-md" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">Read more</a>
  </div><!-- .md:w-2/4 -->
</div><!-- .card -->