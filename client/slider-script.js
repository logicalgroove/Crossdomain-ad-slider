var j = jQuery;
j(function() {
    //addign scrollable plugin to created .slider-container
    j(".slider-container").scrollable({circular: true, speed: 2000}).navigator().autoscroll();
    var api = j(".slider-container").data("scrollable");

    //simple effects to show/hide title of the slide
    api.onBeforeSeek(function(event, index){
      j(".slider-container .items div").find(".slider-overlay").fadeOut();
    }).onSeek(function(event, index){
      j(".slider-container .items div").find(".slider-overlay").fadeIn();
    });

    j(".slider-container .items div").find(".slider-overlay").fadeIn();
});
