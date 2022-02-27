<?php
/**
 * Requires the custom panel
 */
require __DIR__ . '/panel.php';

/**
 * Requires the custom taxonomies
 */
require __DIR__ . '/taxonomies.php';




// Share
function share($add_class=null) {
  global $post;
  $postlink  = get_permalink($post->ID);
  $posttitle = get_the_title($post->ID);
  $html = '<div class="shared grid grid-cols-3 gap-2 '.$add_class.'">';
  $html .= '<a class="leading-none p-2.5 md:p-3 rounded text-white flex items-center justify-center text-xs md:text-sm font-medium bg-cyan-400 hover:bg-cyan-500" title="Share on Twitter" rel="external" href="http://twitter.com/share?text='.$posttitle.'&url='.$postlink.'"><span class="iconify text-xl mr-1" data-icon="ri:twitter-fill"></span>Tweet</a>';
  $html .= '<a class="leading-none p-2.5 md:p-3 rounded text-white flex items-center justify-center text-xs md:text-sm font-medium bg-blue-600 hover:bg-blue-700" title="Share on Facebook" rel="external" href="http://www.facebook.com/share.php?u=' . $postlink . '"><span class="iconify text-xl mr-1" data-icon="ri:facebook-fill"></span> Share</a>';
  $html .= '<a class="leading-none p-2.5 md:p-3 rounded text-white flex items-center justify-center text-xs md:text-sm font-medium bg-green-700 hover:bg-green-800" title="Share on Whatsapp" rel="external" href="whatsapp://send?text='.$posttitle.' on '.$postlink.'"><span class="iconify text-xl mr-1" data-icon="ri:whatsapp-line"></span> Share</a>';
  $html .= '</div><!-- .share-entry -->';
  return $html;
}

