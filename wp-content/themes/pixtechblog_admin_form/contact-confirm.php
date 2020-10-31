<?php
/*
*
* Template Name: contact-confirm
*
*/
?>
<?php	get_header(); ?>
  <div class="contact_confirm">
    <h3 class="headingTop">
      お問い合わせ
    </h3>
    <p class="confirm">
      以下の内容でよろしければ<span>送信</span>を押してください。
    </p>
    <div class="contents">
      <?php echo do_shortcode( '[mwform_formkey key="328"]' ); ?>
    </div>
  </div>
</div>
<footer class="footerContact_confirm">
<?php	get_footer(); ?>

<!--HTMLをFormと統一する-->
