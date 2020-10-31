<?php
/*
single
*/
get_header(); ?>
  <div class="wrap singlePage">
    <main class="container">
      <article>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
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
          <p class="postText">
            <?php the_content(); ?>
          </p>
        </div>
      </article>
      <div class="tagWrap">
        <h3 class="heading">Tags</h3>
        <ul class="tags" style="list-style:none;">
          <?php tagLoop(); ?>
        </ul>
      </div>
      <?php endwhile; endif; ?>
      <div class="share">
        <h3 class="heading">記事をシェアする</h3>
        <div class="shareWrap">
          <p class="facebook">
            <a href="" class="btn">
              <i class="fab fa-facebook-f ">
                <span>
                  シェアする
                </span>
              </i>
            </a>
          </p>
          <p class="twitter">
            <a href="">
              <i class="fab fa-twitter btn">
                <span>
                ツイートする
                </span>
              </i>
            </a>
          </p>
        </div>
      </div>
    </main>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
