<?php /* Template Name: Project */ ?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main class="project">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2><?php the_field("title_ko"); ?></h2>
                    <p><?php the_field("desc_ko"); ?></p>
                    <?php the_field("exp_ko"); ?>
                </div>
                <div class="col-4">
                    <h2><?php the_field("title_en"); ?></h2>
                    <p><?php the_field("desc_en"); ?></p>
                    <?php the_field("exp_en"); ?>
                </div>
                <div class="col-4">
                    <?php if(get_field("youtube")): ?>
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
                    <?php if(get_field("image_1")): ?>
                    <div class="image">
                        <img src="<?php the_field("image_1"); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if(get_field("image_2")): ?>
                    <div class="image">
                        <img src="<?php the_field("image_2"); ?>">
                    </div>
                    <?php endif; ?>
                    <?php if( get_field("caption_ko") ): ?>
                    <div class="image">
                        <div class="caption">
                            <?php the_field("caption_ko"); ?>
                        </div>
                        <div class="caption">
                            <?php the_field("caption_en"); ?>
                        </div>
                    </div>
                    <?php endif; ?>
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