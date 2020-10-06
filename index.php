<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
	        <?php
	        while(have_posts()) : the_post();
            ?>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php // the_title('<h1>', '</h1>'); ?>
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </div>
            </section>
		    <?php
	        endwhile; // End of the loop.
	        ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();