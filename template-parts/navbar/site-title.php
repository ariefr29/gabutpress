<div class="site-title text-2xl mr-7 text-blue-500 hover:text-blue-600 font-semibold" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
  <?php
    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
    echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
  ?>
</div>
