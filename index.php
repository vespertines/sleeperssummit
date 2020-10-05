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
                            <div class="col-6"></div>
                            <div class="col-6">
                                <div class="intro">
                                    <span>제주어로 ‘반짝반짝’을 뜻하는 ‘벨롱벨롱’과 현재를 뜻하는 영어 ‘Now’가 합쳐진 ‘벨롱벨롱나우’ 페스티벌은, 제주의 환경, 민족 전통문화, 문화/예술 생태계, 교육 4가지 분야의 지속가능성을 꿈꾸며 현재에 우리가 보살피고 바라봐야 할 사회의 모습을 예술로 풀어내고자 합니다.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="video">
                                    <video
                                        class="video-js"
                                        autoplay
                                        loop
                                        preload="auto"
                                        data-setup='{"fluid": true}'
                                    >
                                        <source src="<?php echo get_template_directory_uri(); ?>/assets/dist/video/loop.mp4" type="video/mp4" />
                                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a
                                        ></p>
                                    </video>

                                    <!-- <video autoplay loop><source src="<?php echo get_template_directory_uri(); ?>/assets/dist/video/loop.mp4" type="video/mp4"></video> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="schedule">
                                    <table>
                                        <tr>
                                            <th>2020. 10. 22 (목)</th>
                                            <th>2020. 10. 23 (금)</th>
                                            <th>2020. 10. 24 (토)</th>
                                            <th>2020. 10. 25 (일)</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><span>10:00 - 16:30</span>‘슬리퍼스 써밋’ 컨퍼런스</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><span>11:00</span>탐라록 ‘제주의 꿈 이야기’ 전시 라이브 (20분)</td>
                                            <td><span>11:00</span>탐라록 ‘방언 기억하기’ 전시 라이브 (20분)</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span>14:00</span>음과 양’ - 김기대 x 우디킴 쇼케이스 (20분)</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span>15:00</span>‘음과 양’ - 김기대 x 우디킴 쇼케이스 (20분)</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><span>16:00</span>‘왕 방 갑서’ 플리마켓 토크쇼 (60분)</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span>17:00</span>탐라록 ‘방언 기억하기’ 전시 라이브 (20분)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><span>19:00</span>‘제주에서 제주로’ 퍼포먼스 (30분)</td>
                                            <td></td>
                                            <td><span>19:00</span>음과양 - 김기대 x 우디킴 전시 라이브 (20분)</td>
                                        </tr>
                                        <tr>
                                            <td><span>20:30</span>탐라록 ‘제주의 꿈 이야기’ 퍼포먼스 (박봉수 & 하임)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
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