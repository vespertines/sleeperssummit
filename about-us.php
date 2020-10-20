<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main class="about-us">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <?php the_field("about-us-ko"); ?>
                </div>
                <div class="col-6">
                    <?php the_field("about-us-en"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="desc image">
                        <?php the_field("Desc"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="member">
                        <div class="photo">

                        </div>
                        <div class="title"></div>
                        
                    </div>
                </div>
                <div class="col-3">
                    <div class="member"></div>
                </div>
                <div class="col-3">
                    <div class="member"></div>
                </div>
                <div class="col-3">
                    <div class="member"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>