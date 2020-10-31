<aside class="sidebar sidebarIndex">
  <div class="sidebarWrap">
    <section class="latestArticle">
      <h3 class="heading">
        Latest Article
      </h3>
      <div class="postWrap">
      <?php
        $the_query = subLoop(4);
        $counter = '';
        if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
          ++$counter;
      ?>
      <div class="articlePost">
        <a href="<?php the_permalink(); ?>">
          <p class="image">
            <?php if( has_post_thumbnail() ):the_post_thumbnail('full'); else : endif; ?>
          </p>
          <div class="info">
            <!-- 投稿日時 -->
            <p class="date"><?php the_time('Y.m.d'); ?></p>
            <!-- 記事タイトル -->
            <p class="description"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
          </div>
        </a>
      </div>
      <?php endwhile; endif;
        wp_reset_postdata();
      ?>
      </div>
    </section>
    <section class="joinUs">
      <h3 class="heading">
        Join Us
      </h3>
      <p class="image">
        <a href="http://pixel-hearts.co.jp/contents/recruit.html" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit_link.jpg" alt="採用情報はこちら">
        </a>
      </p>
    </section>
    <section class="sidebarTags">
      <h3 class="heading">
        Tags
      </h3>
      <ul class="tags" style="list-style:none;">
        <?php
          sidebar_tag();
        ?>
      </ul>
    </section>
  </div>
</aside>