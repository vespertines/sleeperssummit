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
		<div class="container">
			<div class="row">
				<div class="col-7">
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
				</div>
				<!-- <div class="col-6">
					<nav id="site-navigation" class="main-navigation">
						<?php // wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
					</nav>
				</div> -->
				<div class="col-5">
					<!-- Begin Mailchimp Signup Form -->
					<div class="subscription" id="mc_embed_signup">
						<form action="https://sleeperssummit.us17.list-manage.com/subscribe/post?u=8fcbfb21b7859cce2212ed8c3&amp;id=478fbf70dd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="이메일" required>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8fcbfb21b7859cce2212ed8c3_478fbf70dd" tabindex="-1" value=""></div>
								<input type="submit" value="가입하기" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
		

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
