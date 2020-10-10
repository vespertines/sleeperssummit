<?php /* Template Name: Jeju Curation */ ?>

<?php get_header(); ?>

<main class="jeju-curation">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div id="map" class="map"></div>
                    <script>
                    // Initialize and add the map
                    function initMap() {
                    // The location of Uluru
                    var jeju = {lat: 33.4, lng: 126.55};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 10, center: jeju});
                    // The marker, positioned at Uluru
                    // var marker = new google.maps.Marker({position: uluru, map: map});
                    }
                    </script>
                    <script defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1nu_Fmi3uk4181k28twv4IqwIWzZQm3Q&callback=initMap">
                    </script>                
                </div>
                <div class="col-4">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>