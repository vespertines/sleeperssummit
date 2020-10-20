<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<link href="<?php bloginfo('template_url'); ?>/assets/dist/css/main.css" rel="stylesheet" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav id="mobileNav" class="mobile-navigation" onclick="closeMobileNav()">
		<div class="navigation">	
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/bellong-bellong-now">Bellong Bellong Now</a></li>
				<li><a href="/jeju-curation">Jeju Curation</a></li>
				<li><a href="/sleepers-summit-tv">Sleepers Summit TV</li>
				<li><a href="/about-us">About Us</a></li>
				<li><a href="https://forms.gle/KEGbJX8o7hzUu5Zu5" target="_blank" class="booking">사전 예약하기</a></li>
			</ul>
		</div>
		<div class="mobile-social">
			<ul>
				<li><a href="mailto:sleeperssummit@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/email.png"></a></li>
				<li><a href="https://www.facebook.com/Sleepers100/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/facebook.png"></a></li>
				<li><a href="https://www.instagram.com/sleepers_summit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/instagram.png"></a></li>
				<li><a href="https://www.youtube.com/channel/UC2WGL_A2jLaDi1x7Vq72lYw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/youtube.png"></a></li>
			</ul>
		</div>
	</nav>
	<header id="masthead" class="site-header">
		<div class="block">
			<div class="nav-button" onclick="mobileNav()">
				<span></span>
				<span></span>
			</div>
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
			</div>
			<nav id="site-navigation" class="main-navigation">
				<ul>
					<li><a href="/bellong-bellong-now">Bellong Bellong Now</a></li>
					<li><a href="/jeju-curation">Jeju Curation</a></li>
					<li><a href="/sleepers-summit-tv">Sleepers Summit TV</li>
					<li><a href="/about-us">About Us</a></li>
					<li><a href="https://forms.gle/KEGbJX8o7hzUu5Zu5" target="_blank" class="booking">사전 예약하기</a></li>
				</ul>
			</nav>
		</div><div class="block">
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
	</header><!-- #masthead -->

	<div id="content" class="site-content">
