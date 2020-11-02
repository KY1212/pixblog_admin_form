<?php
// style.cssを読み込む
function readAssets() {
  wp_enqueue_style(
    'reset-style',
    get_stylesheet_directory_uri().'/assets/css/reset.css'
  );
  wp_enqueue_style(
    'main-style',
    get_stylesheet_directory_uri().'/assets/css/style.css'
  );
  wp_enqueue_script(
    'jquery',
    '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
    array(),'3.4.1',true
  );
  wp_enqueue_script(
    'main-style',
    get_theme_file_uri().'/assets/js/index.js',
    array('jquery'),true
  );
}
add_action( 'wp_enqueue_scripts', 'readAssets' );

function thumbnails() {
  add_theme_support('post-thumbnails');
}

function sidebar_tag() {

  $term_list = get_terms('post_tag');
  $result_list = [];
  $tag = 'class="tag"';
  foreach ($term_list as $term) {
    $tags = (get_term_link( $term, 'post_tag' ));
    echo "<li $tag><a href='".$tags."'>".$term->name."</a></li>";
  }
}

function tagLoop() {
  $tags = get_the_tags();
  $tagCounter = "";
  if ($tags) {
    foreach ($tags as $tag) {
      ++$tagCounter;
      $tagLink = get_tag_link($tag->term_id);
      if ($tagCounter > 3) {
      break;
    }
    echo '<li class="tag"><a href="'.$tagLink.'">' . $tag->name . '</a></li>';
  }
}
}

function subLoop($number = -1, $paged = "") {
  $args = array(
    'post_type' => 'post', //スラッグ
    'posts_per_page' => $number, //件数
    'no_found_rows' => false, //ページングを行う必要性の有無
    'paged' => $paged, //現在のページ数
  );
  $the_query = new WP_Query($args);

  return $the_query;
}

//Pagenation
function pagination($pages = '', $range = 2) {
  $showItems = ($range * 2)+1;

  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }

  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
        $pages = 1;
    }
  }

if (1 != $pages) {
  echo '<ul class="list">';
  if ($paged > 1) {
    echo "<a href='".get_pagenum_link($paged - 1)."'><li><i class='fas fa-angle-left arrow'></i></a>";
  }
  for ($i=1; $i <= $pages; $i++) {
    if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showItems)) {
      echo ($paged == $i)?
      "<li class='page active'><a href='".get_pagenum_link($i)."'>".$i."</a></li>":
      "<li class='page'><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
    }
  }
  if ($paged < $pages) {
    echo "<a href='".get_pagenum_link($paged + 1)."'><li><i class='fas fa-angle-right arrow'></i></a>";
  }
  echo '</ul>';
  }
}

function stop_wp_jQuery() {
  if ( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3');
  }
}
add_action('init', 'stop_wp_jq');


function wpMenuOptimization($menu) {
  return preg_replace(array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu);
}

function cancelAutoParagraph() {
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
}

function wpActiveFunction() {
  register_nav_menus(
    array(
    'global' => 'グローバル'
    )
  );
  cancelAutoParagraph();
}

function hooks() {
  add_action('wp_enqueue_scripts', 'readAssets');
  add_filter('wp_nav_menu', 'wpMenuOptimization');
}

function init() {
  thumbnails();
  wpActiveFunction();
  hooks();
}

init();
