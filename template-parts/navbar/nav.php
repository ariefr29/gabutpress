<nav class="navbar" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <div class="container flex items-center py-5 relative">
    <div id="menu-responsive" class="cursor-pointer mr-3 md:hidden">
      <span class="iconify text-2xl" data-icon="eva:menu-outline"></span>
    </div><!-- button Responsive menu -->

    <?php 
      get_template_part( 'template-parts/navbar/site', 'title' );
      get_template_part( 'template-parts/navbar/nav', 'menu' );
    ?>

    <div class="tombol ml-auto text-2xl flex">
      <?php get_template_part( 'template-parts/navbar/sercing' ); ?>
      <div class="darkmode cursor-pointer">
        <span class="moon dark:hidden iconify" data-icon="eva:moon-outline"></span>
        <span class="sun hidden dark:block iconify" data-icon="eva:sun-outline"></span>
      </div><!-- .darkmode -->
    </div><!-- .tombol -->
  </div><!-- .container -->
</nav>
