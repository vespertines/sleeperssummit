<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/ss.png"></a>
			</div>

			<?php
			if ( is_front_page() || is_home() ) : ?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php else : ?>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<?php
			endif;
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
