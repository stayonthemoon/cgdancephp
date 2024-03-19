<footer class="footer" id="footer">
    <div class="footer__wrapper">
      <div class="footer__form-wrapper">
        <div class="footer__wrapper-item">
          <h2 class="footer__title">Contact us</h2>
          <p class="footer__descr">Text or call if you have any questions</p>
          <a class="footer__phone" href="tel:403-991-8606">403-991-8606</a>
          <a target="_blank" class="footer__email" href="mailto:CGinfodancecompany@gmail.com">CGinfodancecompany@gmail.com</a>
          <div class="footer__social">
            <a target="_blank" class="footer__social-icon footer__social-icon_insta"
              href="https://www.instagram.com/cgdancecompany/"></a>
            <a target="_blank" class="footer__social-icon footer__social-icon_facebook"
              href="https://www.facebook.com/profile.php?id=100089725732706"></a>
          </div>
        </div>
        <div class="footer__wrapper-item">
        <?php 
       $contactForm = new WP_Query(array(
        'post_type' => 'contactform',
       ));
        while($contactForm->have_posts()) {
          $contactForm->the_post(); ?>
          <div>
          <?php the_content(); ?>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="footer__bottom-wrapper">
        <a href="#header" class="footer__button-arrow"></a>
        <p class="footer__copyright">copyright 2024 &copy;
          cgdancecompany & luna hogart</p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script 
  type='text/javascript' 
  src="<?php echo get_theme_file_uri('/js/index.js') ?>">
</script>

<script 
type='text/javascript'  
src="<?php echo get_theme_file_uri('/node_modules/@glidejs/glide/dist/glide.min.js') ?>">
</script>

<script>
  new Glide('.glide').mount()
</script>

</body>
</html>