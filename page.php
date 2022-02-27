<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main class="container md:-mt-10 mb-10">
  <div class="artikel max-w-[924px] mx-auto flex flex-col px-1">
    <div class="meta my-11 md:my-16 text-center order-2 md:order-1">
      <?php the_title( '<h1 class="text-2xl md:text-3xl mb-4 font-semibold">', '</h1>') ?>
      <div class="entry-meta text-xs text-gray-400 dark:text-gray-500"><?php the_time('F j, Y') ?></div>
    </div><!-- .meta -->

    <?php if ( has_post_thumbnail() ) { ?>
      <div class="gambar overflow-hidden rounded-md text-center md:mb-14 order-1 md:order-2">
        <?php the_post_thumbnail(); ?>
      </div>
    <? } ?>
    <div class="konten order-3 mb-5 w-full max-w-3xl text-sm md:text-base mx-auto text-gray-700 dark:text-gray-300">
      <?php 
        the_content(); 
        echo share("my-10"); 
      ?>

      <div class="komentar">
        <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
      </div><!-- .komentar -->

    </div><!-- .konten -->
  </div><!-- .artikel -->

</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
