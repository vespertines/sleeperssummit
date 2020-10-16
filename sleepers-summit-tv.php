<?php /* Template Name: Sleepers Summit TV */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
endwhile;
wp_reset_query();
?>

<main class="sleepers-summit-tv">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Sleepers Summit TV</h2>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>