/* 
Makes top bar shadow appear only (more or less) outside
of the banner on the homepage. Changing styles depending
on scroll position is done by jquery.waypoints.js

Loaded in functions.php using wp_enqueue_script
*/


$(document).ready(function(){
    
    // Workaround: removing the class isn't enough,
    // because toggling the menu adds it back in.
    // foundation/foundation.topbar.js line 56
    $('.f-topbar-fixed').css('padding-top', '0');
    
    $('.top-bar').removeClass('high-shadow');
    $('.top-bar').addClass('topbar-no-bg');
    $('.top-bar').addClass('gradient-bg');
    
    
    var waypoints = $('#helper-buttons').waypoint(function(direction) {
        $('.top-bar').toggleClass('high-shadow');
        $('.top-bar').toggleClass('topbar-no-bg');
        $('.top-bar').toggleClass('gradient-bg');
    });
    
    
    // A simpler version without the gradient:
    /*
    
    $('.top-bar').removeClass('high-shadow');
    
    var waypoints = $('#helper-buttons').waypoint(function(direction) {
        $('.top-bar').toggleClass('high-shadow');
    });
    
    */
    
});

$(document).foundation();