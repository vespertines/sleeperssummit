<?php /* Template Name: Bellong Bellong Now */ ?>

<?php get_header(); ?>

<main class="bellong-bellong-now">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="content">
                    <h2>벨롱벨롱나우 페스티벌 (Bellong Bellong Now Festival)</h2>
                    <p>‘벨롱벨롱나우 페스티벌’은 전 세계 곳곳에 머물며 다 영역 예술을 펼치고 있는 젊은 크리에이터들이 모여 지역민들과 함께 제주의 지속가능성을 이야기하는 문화 예술 페스티벌입니다. 제주어로 ‘반짝반짝’을 뜻하는 ‘벨롱벨롱’과 현재를 뜻하는 영어 ‘Now’가 합쳐진 ‘벨롱벨롱나우’ 페스티벌은, 제주의 환경, 민족 전통문화, 문화/예술 생태계, 교육 4가지 분야의 지속가능성을 꿈꾸며 현재에 우리가 보살피고 바라봐야 할 사회의 모습을 예술로 풀어내고자 합니다.</p>
                    <ul>
                        <li>페스티벌 일정: 10월22일- 25일</li>
                        <li>장소: 제주도 동부, 서부</li>
                        <li>주최/주관: 슬리퍼스 써밋 주식회사</li>
                        <li>후원: 한국문화예술위원회 - 신나는 예술여행</li>
                        <li>디자인 자문: 에이브로져스 디자인</li>
                        <li>지원: 예술곶 산양</li>
                        <li>협력: 골목시장, 서귀포사회적경제복지센터, 술담화, 이스카이아트, 플레이스캠프 제주, 함덕초등학교 선흘분교, 혼디장</li>
                    </ul>
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