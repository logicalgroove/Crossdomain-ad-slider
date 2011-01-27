var server_url = "http://www.exclusivelylux.com/ad/data/";

var jQueryScriptOutputted = false;
function initJQuery() {

    //if the jQuery object isn't available
    if (typeof(jQuery) == 'undefined') {

        if (! jQueryScriptOutputted) {
            //only output the script once..
            jQueryScriptOutputted = true;

            //output jQuery library script (load it from google api)
            var script = document.createElement('script');
            script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
            script.type = 'text/javascript';
            document.getElementsByTagName('head')[0].appendChild(script);

            //output jQuery Tools plugin from server
            var script = document.createElement('script');
            script.src = server_url + 'jquery.tools.js';
            script.type = 'text/javascript';
            document.getElementsByTagName('head')[0].appendChild(script);

            //outout CSS from server
            var css = document.createElement('link');
            css.type = 'text/css';
            css.rel = 'stylesheet';
            css.href = server_url + 'slider-style.css';
            css.media = 'screen';
            document.getElementsByTagName('head')[0].appendChild(css);
        }
        setTimeout("initJQuery()", 50);
    } else {

        var j = jQuery;
        j(function() {

          //load data drom server
          j.getJSON(server_url + 'slider-data.php?callback=?',
            function(data) {

              var sliderdata = '<div class="items">';

              //parsing data from loaded JSON
              j.each(data.slides.slide, function(i,item){
                var image_tag = '<a href="'+ item.link +'"><img src="'+ item.image +'" /></a>';
                var title_tag = '<a class="slider-title" href="'+ item.link +'">'+ item.title +'</a>';
                var comment_tag = '<span class="slider-comment">'+ item.comment +'</span>';
                sliderdata += '<div>'+image_tag+'<span class="slider-overlay">'+ title_tag + comment_tag +'</span></div>';
              });

              sliderdata += "</div>"

              //putting parsed data to the page
              j(".slider-container").html(sliderdata);
              //adding navigation to the slider
              j(".slider-container").after('<div class="navi"></div>');

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

        });
    }

}
initJQuery();
