<?php /* Template Name: Project */ ?>

<?php get_header(); ?>

<main class="project">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="content">
                    <div class="video">
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/bS4YTqRf1eY"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BrGIPqM8s_M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3SykjY3GdMs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/cYegb6oFeIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1000/500" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1100/550" alt="">
                        </div>
                    </div><div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1200/600" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1300/650" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1400/700" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1500/750" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1600/800" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1700/850" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="image">
                            <img src="https://picsum.photos/1800/900" alt="">
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div> 
    </div>
</main>

<?php get_footer(); ?>