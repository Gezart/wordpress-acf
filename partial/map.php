<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<div id="map"  data-aos="fade-up"></div>
<script>
    var map, marker, infowindow;

    function initMap() {
    // Set the initial properties of the map
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: <?php the_sub_field('latitude');?>, lng: <?php the_sub_field('longitude');?>},
        zoom: 8
    });

    // Set the position of the marker
    marker = new google.maps.Marker({
        position: {lat: <?php the_sub_field('latitude');?>, lng: <?php the_sub_field('longitude');?>},
        map: map,
    });

    // Set the content of the info window
    infowindow = new google.maps.InfoWindow({
        content: '<h1>Hello World!</h1><p>This is a simple Google Map.</p>'
    });

    // Add a click listener to the marker to open the info window
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    }
</script>