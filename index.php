<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

	        <?php
	        while(have_posts()) : the_post();
		        ?>

                <section>
			        <?php // the_title('<h1>', '</h1>'); ?>

			        <?php
			        // the_content();
					?>
					<div class="video">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/R38XCsv-1tw?loop=1&modestbranding=1"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
					<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/R38XCsv-1tw?controls=0;autoplay=1;start=2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </section>

		        <?php
	        endwhile; // End of the loop.
	        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();