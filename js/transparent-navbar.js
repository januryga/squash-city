$(document).ready(function(){
    
    $('.top-bar').removeClass('high-shadow');
    
    var waypoints = $('#helper-buttons').waypoint(function(direction) {
        $('.top-bar').toggleClass('high-shadow');
    });

/*var waypoints = $('.welcome-banner').waypoint(function(direction) {
    $('.top-bar').toggleClass('top-bar-no-bg');
    $('.top-bar').toggleClass('gradient-bg');
})

var waypoints = $('#helper-buttons').waypoint(function(direction) {
    $('.top-bar').toggleClass('high-shadow');
    $('.top-bar').toggleClass('top-bar-no-bg');
    $('.top-bar').toggleClass('gradient-bg');
})*/
    
});

$(document).foundation();