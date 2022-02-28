<div class="md:flex items-center max-w-[900px] mx-auto mt-16 py-14 px-6">
  <div class="md:w-1/3">
    <?php $avatar = (get_option('set_profile_imageurl')) ? get_option('set_profile_imageurl') : get_template_directory_uri().'/assets/img/avatar.jpg' ; ?>
    <img class="mx-auto rounded-full mb-5 md:mb-0" src="<?= $avatar ?>" alt="avatar">
  </div><!-- .md:w-2/4 -->
  <div class="md:w-2/3 md:ml-10 text-gray-500 dark:text-gray-300"> 
    <p class="leading-8"><?= get_option('set_profile_text') ?></p>
  </div><!-- .md:w-2/4 -->
</div><!-- .card -->

<hr class="w-3/5 max-w-xl mx-auto mb-28 dark:border-gray-600">