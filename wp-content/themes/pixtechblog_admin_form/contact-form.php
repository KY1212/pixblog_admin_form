<?php
/*
*
* Template Name: contact-form
*
*/
?>
<?php	get_header(); ?>
<div class="contact_form">
    <h3 class="headingTop">
      お問い合わせ
    </h3>
    <p>
      当ホームページに関するお問い合わせやご要望がある場合こちらからご連絡ください。
    </p>
    <div class="contents">
      <div class="formWrap">
          <?php echo do_shortcode( '[mwform_formkey key="328"]
' ); ?>
      </div>
    </div>
</div>
</div>
  <footer class="footerContact_form">
  <?php	get_footer(); ?>
