<div class="article-categorized article-categorized__red">
  <h3 class="article-categorized__title">Список всех болезней:</h3>
  <ul class="top-levet-cats">
    <?php
      $categories = get_categories( array(
        'orderby' => 'name',
        'parent'  => 0
      ) );

      foreach ( $categories as $category ) {
        printf( '<li><a href="%1$s">%2$s</a></li>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_html( $category->name )
        );
      }
    ?>
  </ul><!-- top-levet-cats -->

  <?php if (is_category()) { $cat = get_query_var('cat');  ?>
    <h3 class="article-categorized__title"><?php echo get_cat_name($cat);?></h3>
    <?php wp_list_categories('orderby=id&use_desc_for_title=1&depth=1&hierarchical=1&hide_empty=0&child_of='.$cat.'&title_li=""'); ?>
  <?php } ?>

</div><!-- /.article-categorized article-categorized-red -->
