<?php get_header(); ?>
<div class="wrap indexPage">
  <main class="container">
    <?php
    $the_query = subLoop(9);
    $counter = '';
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
        ++$counter;
    ?>
        <?php if ($counter <= 1) : ?>
          <div class="jumbotron">
            <a href="<?php the_permalink(); ?>">
              <?php
              $article_url = wp_get_attachment_url(get_post_thumbnail_id());
              $article_bg = "style='background-image:url(" . $article_url . ");'";
              ?>
              <div class="image" <?php echo $article_bg; ?>></div>
              <div class="titleWrap">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <p class="description"><?php the_title(); ?></p>
              </div>
            </a>
          </div>
          <div class="postWrap">
          <?php else : ?>
            <div class="post">
              <a href="<?php the_permalink(); ?>">
                <?php
                $article_url = wp_get_attachment_url(get_post_thumbnail_id());
                $article_bg = "style='background-image:url(" . $article_url . ");'";
                ?>
                <div class="image" <?php echo $article_bg; ?>></div>
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <p class="description"><?php the_title(); ?></p>
              </a>
              <ul class="tags" style="list-style:none;">
                <?php tagLoop(); ?>
              </ul>
            </div>
          <?php endif; ?>
      <?php
      endwhile;
    endif;
    wp_reset_postdata();
      ?>
          </div>
          <p class="readmore">
            <a href="<?php echo content_url(); ?>/article" class="btn">
              read more
            </a>
          </p>
  </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
