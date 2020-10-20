<?php /* Template Name: Home */ ?>

<?php
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
	        <?php
	        while(have_posts()) : the_post();
                ?> 
                <section>
                    <div class="container">
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
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="intro">
                                    <span>제주어로 ‘반짝반짝’을 뜻하는 ‘벨롱벨롱’과 현재를 뜻하는 영어 ‘Now’가 합쳐진 ‘벨롱벨롱나우’ 페스티벌은, 제주의 환경, 민족 전통문화, 문화/예술 생태계, 교육 4가지 분야의 지속가능성을 꿈꾸며 현재에 우리가 보살피고 바라봐야 할 사회의 모습을 예술로 풀어내고자 합니다.</span>
                                    <a href="https://forms.gle/KEGbJX8o7hzUu5Zu5" target="_blank">사전 예약하기</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="intro">
                                    <span>Bellong Bellong Now is an art and cultural festival, organized by a group of young international creators to explore a sustainable future for Korea’s Jeju Island.</span>
                                    <a href="https://forms.gle/KEGbJX8o7hzUu5Zu5" target="_blank">Pre-booking</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="event-schedule">
                                    <h3>행사 일정</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="event-schedule">
                                    <div class="event">
                                        <h4><a href="/project/tamlarok-2/">탐라록 (제주의 꿈 이야기)</a></h4>
                                        <span><a href="/artist/bongsu-park/">박봉수</a> x <a href="/artist/haihm/">하임</a></span>
                                        <span>전시장소: 플레이스 캠프 제주 / 액티비티 플러스 라운지</span>
                                        <span>전시일정: 10월 23일 - 24일</span>
                                        <span>10:00 - 18:00 (점심시간 12:00 - 13:00)</span>
                                        <span>전시 퍼포먼스 & 프리뷰 일정: 10월 22일 20:30</span>
                                        <span>퍼포먼스 라이브: 10월 22일 22:30</span>
                                        <span>전시 라이브: 10월 24일 11:00 <a href="https://www.youtube.com/watch?v=x7cBtvwdmz4" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/tamlarok-1/">탐라록 (방언 기억하기)</a></h4>
                                        <span><a href="/artist/yeni-kim/">김예니</a></span>
                                        <span>전시장소: 플레이스 캠프 제주 / Change동 4층</span>
                                        <span>전시일정: 10월 23일 - 25일</span>
                                        <span>10:00 - 18:00 (점심시간 12:00 - 13:00)</span>
                                        <span>퍼포먼스 라이브: 10월 22일 17:00</span>
                                        <span>전시 라이브: 10월 25일 11:00 <a href="https://www.youtube.com/watch?v=Z1yJ_TrFuHA" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/from-jeju-to-jeju/">제주에서 제주로</a></h4>
                                        <span><a href="/artist/kura-yang/">양쿠라</a> x <a href="/artist/maria-gilonna/">마리아 길로나</a></span>
                                        <span>전시장소: 예술곶 산양</span>
                                        <span>전시일정: 10월 23일 - 24일</span>
                                        <span>10:00 - 17:00 (점심시간 12:00 - 13:00)</span>
                                        <span>전시 퍼포먼스 & 프리뷰: 10월 23일 17:40 (with 조아라)</span>
                                        <span>퍼포먼스 라이브: 10월 23일 17:40 <a href="https://www.youtube.com/watch?v=saexJDn9yD4" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/yin-yang-1/">음과양 (평대리)</a></h4>
                                        <span><a href="/artist/kidai-kim/">김기대</a> x <a href="/artist/woody-kim/">우디킴</a></span>
                                        <span>전시장소: 구좌읍 평대리 32-1</span>
                                        <span>전시일정: 10월 22일 - 25일</span>
                                        <span>10:00 - 17:00 (점심시간 12:00 - 13:00)</span>
                                        <span>전시 라이브: 10월 25일 16:00 - 16:20 <a href="https://www.youtube.com/watch?v=9uSjszDh_O0" target="_blank">시청하기</a></span>
                                        <span>10월 25일 19:00 - 19:20 <a href="https://www.youtube.com/watch?v=5PlAGi5X87k" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/yin-yang-2/">음과양 (한동리)</a></h4>
                                        <span><a href="/artist/kidai-kim/">김기대</a> x <a href="/artist/sunyoung-chon/">전선영</a> x <a href="/artist/maximiliano-arrocet/">막시밀리아노 아로세</a></span>
                                        <span>전시장소: 구좌읍 한동리 1428</span>
                                        <span>전시일정: 10월 22일 - 10월 25일</span>
                                        <span>10:00 - 17:00 (점심시간 12:00 - 13:00)</span>
                                        <span>전시 라이브: 10월 25일 14:00 - 14:30 <a href="https://www.youtube.com/watch?v=J0gOLgLVRek" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/wang-bwang-gap-seo/">왕봥갑서 - 지속가능성을 향한 플리마켓</a></h4>
                                        <span>행사장소: 플레이스 캠프 제주</span>
                                        <span>행사일정: 10월 24일</span>
                                        <span>10:00 - 18:00 (점심시간 12:00 - 13:00)</span>
                                        <span>토크: 10월 24일 16:00</span>
                                        <span>토크쇼 라이브: 10월 24일 16:00 - 17:00 <a href="https://www.youtube.com/watch?v=rNjoiqzGLCc" target="_blank">시청하기</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/sleepers-summit/">슬리퍼스 써밋 - 컨퍼런스</a></h4>
                                        <span>행사장소: 예술곶 산양</span>
                                        <span>행사일정: 10월 23일</span>
                                        <span>10:00 - 17:00 (점심시간 12:10 - 13:30)</span>
                                        <span>라이브: 10월 23일 10:00 - 17:00 <a href="https://www.youtube.com/watch?v=oz-7BvbJoF8" target="_blank">시청하기</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="event-schedule">
                                    <h3>Event Schedule</h3>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="event-schedule">
                                    <div class="event">
                                        <h4><a href="/project/tamlarok-2/">Tamlarok (Dreams & Dreaming)</a></h4>
                                        <span><a href="/artist/bongsu-park/">Bongsu Park</a> x <a href="/artist/haihm/">haihm</a></span>
                                        <span>Location: Playce Camp Jeju / Activity Plus Lounge</span>
                                        <span>Exhibition: 23 - 24 Oct</span>
                                        <span>10:00 - 18:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Performance & Preview: 22 Oct 20:30</span>
                                        <span>Performance Live: 22 Oct 22:30</span>
                                        <span>Exhibition Live: 24 Oct 11:00 <a href="https://www.youtube.com/watch?v=x7cBtvwdmz4" target="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/tamlarok-1/">Tamlarok (Remembering Jeju's dialect)</a></h4>
                                        <span><a href="/artist/yeni-kim/">Yeni Kim</a></span>
                                        <span>Location: Playce Camp Jeju, CHANGE 4th floor </span>
                                        <span>Exhibition: 23 - 25 Oct</span>
                                        <span>10:00 - 18:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Performance Live: 22 Oct 17:00</span>
                                        <span>Exhibition Live: 25 Oct 11:00 <a href="https://www.youtube.com/watch?v=Z1yJ_TrFuHA" targer="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/from-jeju-to-jeju/">From Jeju to Jeju</a></h4>
                                        <span><a href="/artist/kura-yang/">Yangkura</a> x <a href="/artist/maria-gilonna/">Maria Glionna</a></span>
                                        <span>Location: ART LAB. Sanyang</span>
                                        <span>Exhibition: 22 - 25 Oct</span>
                                        <span>10:00 - 18:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Performance & Preview: 23 Oct 17:40 (with Ahra Jo)</span>
                                        <span>Performance Live: 23 Oc 17:40 <a href="https://www.youtube.com/watch?v=saexJDn9yD4" target="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/yin-yang-1/">Yin & Yang (Pyungdaeri)</a></h4>
                                        <span><a href="/artist/kidai-kim/">Kidai Kim</a> x <a href="/artist/woody-kim/">Woody Kim</a></span>
                                        <span>Location: 32-1 Pyeongdaeri, Gujwa-eup</span>
                                        <span>Exhibition: 22 - 25 Oct</span>
                                        <span>10:00 - 17:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Exhibition Live: 25 Oct 16:00 - 16:20 <a href="https://www.youtube.com/watch?v=9uSjszDh_O0" target="_blank">Watch</a></span>
                                        <span>25 Oct 19:00 - 19:20 <a href="https://www.youtube.com/watch?v=5PlAGi5X87k" target="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/yin-yang-2/">Yin & Yang (Handongri)</a></h4>
                                        <span><a href="/artist/kidai-kim/">Kidai Kim</a> x <a href="/artist/maximiliano-arrocet/">Maximiliano Arrocet</a> x <a href="/artist/sunyoung-chon/">Sunyoung Chon</a></span>
                                        <span>Exhibition: 1428 Handongri, Gujwa-eup</span>
                                        <span>Location: 22 - 25 Oct</span>
                                        <span>10:00 - 17:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Exhibition Live: 10월 25일 14:00 - 14:30 <a href="https://www.youtube.com/watch?v=J0gOLgLVRek" target="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/wang-bwang-gap-seo/">Wang Bwang GapSeo - Come and Have a Look</a></h4>
                                        <span>Location: Playce Camp Jeju</span>
                                        <span>Market: 24 Oct 14:00 - 20:00</span>
                                        <span>10:00 - 18:00 (Lunch break 12:00 - 13:00)</span>
                                        <span>Talk: 24 Oct 16:00</span>
                                        <span>Talk Show Live: 24 Oc 16:00 - 17:00 <a href="https://www.youtube.com/watch?v=rNjoiqzGLCc" target="_blank">Watch</a></span>
                                    </div>
                                    <div class="event">
                                        <h4><a href="/project/sleepers-summit/">Sleepers Summit (Conference)</a></h4>
                                        <span>Location: ART LAB. Sanyang</span>
                                        <span>Exhibition: 23 Oct</span>
                                        <span>10:00 - 16:30 (Lunch break: 12:10 - 13:30)</span>
                                        <span>Live: 23 Oct 10:00 - 17:00 <a href="https://www.youtube.com/watch?v=oz-7BvbJoF8" target="_blank">Watch</a></span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12">
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
                                            <td><span>10:00 - 16:30</span><a href="/project/sleepers-summit/">‘슬리퍼스 써밋’</a> 컨퍼런스</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><span>11:00 - 11:20</span><a href="/project/tamlarok-2/">탐라록 ‘제주의 꿈 이야기’</a> 전시 라이브</td>
                                            <td><span>11:00 - 11:20</span><a href="/project/tamlarok-1/">탐라록 ‘방언 기억하기’</a> 전시 라이브</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span>14:00 - 14:20</span><a href="/project/yin-yang-1/">‘음과 양’</a> <a href="/artist/kidai-kim/">김기대</a> x <a href="/artist/woody-kim/">우디킴</a> 쇼케이스</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span>15:00 - 15:20</span><a href="/project/yin-yang-1/">‘음과 양’</a> <a href="/artist/kidai-kim/">김기대</a> x <a href="/artist/woody-kim/">우디킴</a> 쇼케이스</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><span>16:00 - 17:00</span><a href="/project/wang-bwang-gap-seo">‘왕 방 갑서’ 플리마켓</a> 토크쇼</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><span>17:00 - 17:20</span><a href="/project/tamlarok-1/">탐라록 ‘방언 기억하기’</a> 전시 라이브</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><span>19:00 - 19:30</span><a href="/project/from-jeju-to-jeju/">‘제주에서 제주로’</a> 퍼포먼스</td>
                                            <td></td>
                                            <td><span>19:00 - 19:20</span><a href="/project/yin-yang-1/">‘음과양’</a> <a href="/artist/kidai-kim/">김기대</a> x <a href="/artist/woody-kim/">우디킴</a> 전시 라이브</td>
                                        </tr>
                                        <tr>
                                            <td><span>20:30</span><a href="/project/tamlarok-2/">탐라록 ‘제주의 꿈 이야기’</a> 퍼포먼스 <a href="/artist/bongsu-park">박봉수</a> x <a href="/artist/haihm">하임</a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div> -->
                        </div>
                </section>

		        <?php
	        endwhile; // End of the loop.
	        ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();