<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href="<?php echo get_template_directory_uri()	?>/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1P-H_fyEh6IaGS_mdIAPnMUIiQhKON2s"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
		?>
	</head>

	<body <?php body_class('body-offcanvas'); ?>>
<header id="header">


				  <nav class="navbar navbar-expand-lg navbar-light bg-light">
						 <a class="navbar-brand visible-xs" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" ><img src="<?php echo get_field('logotipo', get_option( 'page_on_front' )); ?>" class="img-responsive"/></a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4-navbar" aria-controls="bs4-navbar" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                              </button>
                              <?php
                              wp_nav_menu([
                                  'menu'            => 'principal',
                                  'theme_location'  => 'global',
                                  'container'       => 'div',
                                  'container_id'    => 'bs4-navbar',
                                  'container_class' => 'collapse navbar-collapse',
                                  'menu_id'         => false,
                                  'menu_class'      => 'navbar-nav mr-auto',
                                  'depth'           => 2,
                                  'fallback_cb'     => 'bs4navwalker::fallback',
                                  'walker'          => new bs4navwalker()
                              ]);
                              ?>
						</nav>

					

						<?php
                        //get_template_part('partials/_social-links')
                        ?>
</header>



