<?php get_header(); ?>
  <div class="row">
    <div class="article__container col-md-9">

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

    </div><!-- /.article__container col-md-9 -->
    <?php get_sidebar(); ?>
  </div><!-- /.row -->
<?php get_footer(); ?>
