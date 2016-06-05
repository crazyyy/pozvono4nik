<?php get_header(); ?>

  <div class="row">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="article__container col-md-9">

        <?php get_template_part('article-categorized'); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>
          <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
          <?php the_content(); ?>
          <?php wpb_set_post_views(get_the_ID()); ?>
          <?php edit_post_link(); ?>

          <?php if(has_tag()) { ?>
            <div class="article-tags">
              <?php the_tags('', '');  ?>
            </div><!-- /.article-tags -->
          <?php } ?>

        </article>

      </div><!-- /.article__container col-md-9 -->

    <?php endwhile; else: // If 404 page error ?>
      <article class="col-md-9">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>

    <?php get_sidebar(); ?>
  </div><!-- /.row -->

<?php get_footer(); ?>
