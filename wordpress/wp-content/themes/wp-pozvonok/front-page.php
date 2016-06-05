<?php /* Template Name: Home Page */ get_header(); ?>

  <article class="last-articles row">
    <h3 class="col-md-12 articles__title">Последние статьи</h3>
    <?php query_posts("showposts=6&cat=1"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4 last-articles__item">
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </a><!-- /post thumbnail -->
        <h2>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <span class="date"><?php the_time('j F Y'); ?></span>
      </div><!-- /.col-md-4 last-articles__item -->
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </article><!-- last-articles row -->

  <article class="popular-articles row">
    <h3 class="col-md-12 articles__title">ПОПУРЯРНЫЕ СТАТЬИ</h3>
    <div class="popular-articles__left col-md-5">
      <?php $popularpost = new WP_Query( array( 'posts_per_page' => 1, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
        <div class="popular-articles__item">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
          <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          <span class="date"><?php the_time('j F Y'); ?></span>
          <?php wpeExcerpt('wpeExcerpt40'); ?>
        </div><!-- /.popular-articles__item -->
      <?php endwhile; ?>
    </div><!-- /.popular-articles__left col-md-5 -->
    <div class="popular-articles__right col-md-7">
      <?php $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC', 'offset' => '1'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
        <div class="popular-articles__item">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
          <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          <span class="date"><?php the_time('j F Y'); ?></span>
          <?php wpeExcerpt('wpeExcerpt20'); ?>
        </div><!-- /.popular-articles__item -->
      <?php endwhile; ?>
    </div><!-- /.popular-articles__right col-md-7 -->
  </article><!-- /.popular-articles row -->
<?php get_footer(); ?>
