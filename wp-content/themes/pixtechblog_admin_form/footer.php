</div>
<footer class="footerIndex">
  <div class="inner">
    <p class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="PIXTECH BLOG">
    </p>
    <?php
      wp_nav_menu( array(
        'theme_location' => 'global',
        'menu_class' => 'links',
        'depth' => 1
      ));
    ?>
    <p class="copylight">
      ©︎ 2019 PIXEL HEARTS.inc
    </p>
</footer>
<?php
		wp_footer();
	?>
</body>
</html>