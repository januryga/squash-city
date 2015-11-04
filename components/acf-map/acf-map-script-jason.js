/*
SEE WARNING BELOW
Source: Jasonblackdog's comment on
http://support.advancedcustomfields.com/forums/topic/acf-google-maps-rendering/

It's a modified version of ACF's original script, found here:
http://www.advancedcustomfields.com/resources/google-map/


"Since I was using jQuery tabs on my page, I attached
a click event to one of my tab links that loads the map.
Now, it will only load the map when someone clicks that
particular link/tab (which I’m okay with).
So, on tab click, render map."

The modified part is $document.ready() and render_map


!!!!!!!!! WARNING !!!!!!!!!!

There is a problem with repeatedly calling render_map:
specifically with "var $markers = $el.find('.marker');".
after the map is rendered for the first time, the .marker
elements are replaced by the actual map! So calling render_map
a second time results in a map with no markers, showing some
point on the Pacific Ocean.
*/



(function($) {

function render_map( $el ) {

    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
        zoom		: 16,
        center		: new google.maps.LatLng(0, 0),
        mapTypeId	: google.maps.MapTypeId.ROADMAP
    };

    // create map
    var map = new google.maps.Map( $el[0], args);

    // add a markers reference
    map.markers = [];

    // add markers
    $markers.each(function(){

        add_marker( $(this), map );

    });

    // center map
    center_map( map );

    google.maps.event.addListenerOnce(map, 'idle', function(){
         google.maps.event.trigger(map, 'resize');
         center_map(map);
     });


}


function add_marker( $marker, map ) {

    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
        position	: latlng,
        map			: map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content		: $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

        });
    }

}

function center_map( map ) {

    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

    });

    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }

}

$(document).ready(function(){

    $( ".location-accordion-navigation" ).one( "click", function() {
        $('.acf-map').each(function(){
            render_map( $(this) );
        });

    });


});

})(jQuery);
