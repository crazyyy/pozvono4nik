<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <?php if ( is_front_page() && is_home() ){ ?>
          <div class="logo col-md-6">
        <?php } else { ?>
          <a class="logo col-md-6" href="<?php echo home_url(); ?>">
        <?php } ?>
          <h5 class="logo__title">Pozvonochnikpro<span>.ru</span></h5>
          <h4 class="logo__description"><?php bloginfo('description'); ?></h4>
        <?php if ( is_front_page() && is_home() ){ ?>
          </div>
        <?php } else { ?>
          </a>
        <?php } ?>

        <a href="" class="ask-question col-md-6">
          <span class="ask-question__container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ask-question.png" alt="">
            <span class="title">Задать вопрос врачу?</span>
            <span class="name">Зинчук Татьяна Владимировна</span>
            <span class="post">врач-невропатолог</span>
          </span>
        </a><!-- ask-question -->

        <!-- add count https://wordpress.org/support/topic/count-wp_nav_menu-items -->
        <nav class="nav col-md-12" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav><!-- /nav -->

      </div>
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
    <div class="container">
