<?php
/*
*
* Template Name: tag.php
*
*/
?>
<?php get_header(); ?>
<div class="wrap tagPage">
  <main class="container">
    <h3 class="headingTop">
      <?php single_cat_title(); ?>
    </h3>
    <div class="postWrap">
    <?php
      if (have_posts()):
      while (have_posts()):the_post();
    ?>
    <div class="post">
      <a href="<?php the_permalink(); ?>">
        <?php
          $article_url = wp_get_attachment_url(get_post_thumbnail_id());
          $article_bg = "style='background-image:url(".$article_url.");'";
        ?>
        <div class="image" <?php echo $article_bg; ?>></div>
        <p class="date"><?php the_time('Y.m.d'); ?></p>
        <p class="description"><?php the_title(); ?></p>
      </a>
      <ul class="tags" style="list-style:none;">
        <?php tagLoop(); ?>
      </ul>
    </div>
    <?php
      endwhile; endif;
      wp_reset_postdata();
    ?>
    </div>
    <div class="pagenation">
      <?php pagination($the_query->max_num_pages);?>
    </div>
  </main>
<?php get_sidebar(); ?>
</div>
  <footer class="footerContact_form">
<?php get_footer(); ?>
