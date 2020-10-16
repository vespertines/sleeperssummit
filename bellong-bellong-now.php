<?php /* Template Name: Bellong Bellong Now */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
endwhile;
wp_reset_query();
?>

<main class="bellong-bellong-now">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <section>
                        <h2>벨롱벨롱나우 페스티벌</h2>
                        <p><?php the_field("bellong_bellong_now_ko"); ?></p>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <h2>Bellong Bellong Now Festival</h2>
                        <p><?php the_field("bellong_bellong_now_en"); ?></p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("bellong_bellong_now_desc_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("bellong_bellong_now_desc_en"); ?>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("programme_1_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("programme_1_en"); ?>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("programme_2_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("programme_2_en"); ?>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("programme_3_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("programme_3_en"); ?>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("programme_4_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("programme_4_en"); ?>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <section>
                        <?php the_field("programme_5_ko"); ?>
                    </section>
                </div>
                <div class="col-6">
                    <section>
                        <?php the_field("programme_5_en"); ?>
                    </section>
                </div>
            </div>
        </div> 
    </div>
</main>

<?php get_footer(); ?>