/*
This script handles:
- Creation of google map
- Adding markers
- Keeping center coordinates when
  map size changes
- Redisplaying the map when an the
  map's parent Accordion element
  is opened (resetMap).
  Done via triggering "resize":
  google.maps.event.trigger(map, 'resize');


This is a modified version of:
http://stackoverflow.com/questions/23880730/google-maps-in-zurb-foundation-not-re-centering-on-toggle
With Duncan's comments applied + Trigger when an accordion is clicked (line 77).

^ The above script is based on:
http://www.advancedcustomfields.com/resources/google-map/

The event handler on line 77 is taken from:
http://foundation.zurb.com/docs/components/accordion.html
*/

(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/

function render_map( $el ) {

// var
var $markers = $el.find('.marker');

// vars
var args = {
    zoom        : 10,
    center      : new google.maps.LatLng(0, 0),
    mapTypeId   : google.maps.MapTypeId.ROADMAP
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

function resetMap(map){
    zoom = map.getZoom();
    center = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setZoom(zoom);
    map.setCenter(center);
};


$('.location-accordion').on('toggled', function(event, accordion){
    resetMap(map);
});


}

 /*
 *  add_marker
  *
 *  This function will add a marker to the selected Google Map
 *
 *  @type   function
 *  @date   8/11/2013
  *  @since 4.3.0
 *
 *  @param  $marker (jQuery element)
 *  @param  map (Google Map object)
 *  @return n/a
*/

function add_marker( $marker, map ) {

// var
var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

// create marker
var marker = new google.maps.Marker({
    position    : latlng,
    map         : map
});

// add to array
map.markers.push( marker );

// if marker contains HTML, add it to an infoWindow
if( $marker.html() )
{
    // create info window
    var infowindow = new google.maps.InfoWindow({
        content     : $marker.html()
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


/*
 *  document ready
 *
 *  This function will render each map when the document is ready (page has loaded)
 *
 *  @type   function
 *  @date   8/11/2013
  *  @since 5.0.0
 *
 *  @param  n/a
 *  @return n/a
 */

$(document).ready(function(){

    $('.acf-map').each(function() {
        render_map( $(this) );
     });

});



})(jQuery);
