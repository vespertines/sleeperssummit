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
                    <?php if( get_field("youtube") ): ?>
                    <div class="youtube">
                        <iframe
                        width="560"
                        height="315"
                        src="<?php the_field("youtube"); ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        ></iframe>
                    </div>
                    <?php endif; ?>
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