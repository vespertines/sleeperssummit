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
                    <div class="container">
                        <div class="row">
                            <div class="col-7"></div>
                            <div class="col-5">
                                <div class="intro">
                                    <span>슬리퍼스 써밋은 세계 곳곳에 머물며 다양한 영역에서 예술을 펼치고 있는 젊은 베테랑들이 모인 글로벌 창작 플랫폼으로, 전시, 페스티벌, 영상 제작을 하고 있습니다.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="video">
                                    <iframe
                                        width="560"
                                        height="315"
                                        src="https://www.youtube.com/embed/OPuo2jzUL8k"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                    ></iframe>
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