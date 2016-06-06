<?php get_header(); ?>
  <div class="row">

    <div class="article__container col-md-9">
      <article>
        <h1 class="page-title inner-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </article>
    </div><!-- /.article__container col-md-9 -->

    <?php get_sidebar(); ?>
  </div><!-- /.row -->
<?php get_footer(); ?>
