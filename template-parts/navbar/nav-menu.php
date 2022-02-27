<div class="menux z-50">
  <div id="bg-menu" class="bg-slate-900 opacity-90 fixed top-0 left-0 right-0 bottom-0 transition hidden"></div>
  <?php wp_nav_menu(array(
    'theme_location'  =>  'main_menu', 
    'container'       =>  'ul',
    'menu_id'         =>  'menu', 
    'menu_class'      =>  'menu transition duration-300', 
  )); ?>
</div>
