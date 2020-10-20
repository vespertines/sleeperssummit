<?php /* Template Name: Artist */ ?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main class="artist">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="profile">
                        <h2><?php the_field("name_ko"); ?></h2>
                        <p><?php the_field("bio_ko"); ?></p>
                        <?php the_field("project_ko"); ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="profile">
                        <h2><?php the_field("name_en"); ?></h2>
                        <p><?php the_field("bio_en"); ?></p>
                        <?php the_field("project_en"); ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="profile">
                        <div class="photo">
                            <img src="<?php the_field("photo"); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
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
                </div>
            </div>
            <div class="row">
                <?php if( get_field("image_1") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_1"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_2") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_2"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_3") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_3"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_4") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_4"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_5") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_5"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_6") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_6"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_7") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_7"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_8") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_8"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_9") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_9"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_10") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_10"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_11") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_11"); ?>">
                    </div>
                </div>
                <?php endif; ?>
                <?php if( get_field("image_12") ): ?>
                <div class="col-12">
                    <div class="image">
                        <img src="<?php the_field("image_12"); ?>">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php
endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>