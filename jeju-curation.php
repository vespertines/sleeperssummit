<?php /* Template Name: Jeju Curation */ ?>

<?php get_header(); ?>

<main class="jeju-curation">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1j0YELrMhaD_fODjaVIK5EUl_o7w9M8Rs"></iframe>
                    </div>           
                </div>
                <div class="col-4">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>