<?php // related post by Category

$orig_post = $post;
global $post;

$categories = get_the_category($post->ID);

if ($categories) 
{
    $category_ids = array();

    foreach($categories as $individual_category)
    {
        $category_ids[] = $individual_category->term_id;
    }

    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 2,
        'ignore_sticky_posts'=>1);

    $my_query = new wp_query( $args );

    if( $my_query->have_posts() )
    {
        echo '<div id="related_posts" class="order-4 px-2 grid md:grid-cols-3 gap-5">';
        echo '<h3 class="col-span-full text-xl font-semibold">Related Posts</h3>';
        while( $my_query->have_posts() )
        {
            $my_query->the_post();
            get_template_part( 'template-parts/components/card' );
        }

        echo '</div>';
    }
}

$post = $orig_post;
wp_reset_query();