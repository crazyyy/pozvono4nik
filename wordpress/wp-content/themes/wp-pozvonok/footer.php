    </div><!-- container -->
  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <div class="tags-block col-md-12">
        <h6>все по теме / ТЕГИ:</h6>
        <?php wp_tag_cloud('smallest=10&largest=10&number=0&format=list'); ?>
      </div><!-- /.tags-block-container col-md-12 -->

      <div class="copy-block col-md-12">
        <h5 class="copy-block__title"><?php the_field('footer_title', 22); ?></h5>
        <?php the_field('footer_content', 22); ?>
      </div><!-- /.copy-block col-md-12 -->

      <div class="col-md-5 footer-bottom footer-bottom__left">
        <p><span>&copy; <?php echo date("Y"); ?> Портал Pozvonochnikpro.ru</span>Копирование материалов разрешено только с указанием активной ссылки на первоисточник</p>
      </div><!-- /.col-md-4 footer-bottom footer-bottom__left -->
      <div class="col-md-4 footer-bottom footer-bottom__mid">
        <?php wpeFootNav(); ?>
        <p class="email">E-mail: <a href="mailto:info@pozvonochnikpro.ru">info@pozvonochnikpro.ru</a></p>
      </div><!-- /.col-md-4 footer-bottom footer-bottom__mid -->
      <div class="col-md-3 footer-bottom footer-bottom__right">
        <ul class="socials">
          <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i>facebook.com</a></li>
          <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i>vk.com</a></li>
          <li><a href=""><i class="fa fa-odnoklassniki" aria-hidden="true"></i>ok.ru</a></li>
          <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i>youtube.com</a></li>
        </ul>
      </div><!-- /.col-md-4 footer-bottom footer-bottom__right -->

    </div><!-- row -->
  </div><!-- container -->
</footer><!-- /footer -->
  <?php wp_footer(); ?>
</body>
</html>
