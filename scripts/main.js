$(document).ready(textShift);
$(window).resize(textShift);

var pathToggle = 0;
var psdToggle = 0;

$(".homeSouth").click(function() {
    var offset = 60;
    if($(window).width() < 992) {
        offset = 54;
    }
    $('html,body').animate({
        scrollTop: $(".aboutMe").offset().top - offset},'slow');
});

function textShift() {
    var width = $(window).width();
    if(!pathToggle && (width < 408 || (width < 992 && width >= 768))) {
        document.getElementById('pathLink').innerHTML = "A* Pathfinding";
        pathToggle = 1;
    }
    else if (pathToggle && ((width >= 408 && width < 768) || width >= 992)) {
        document.getElementById('pathLink').innerHTML = "A* Pathfinding Command Line";
        pathToggle = 0;
    }
    if(!psdToggle && $(window).width() < 397) {
        document.getElementById('PSDPlug').innerHTML = "Timelapse PSD Plugin";
        psdToggle = 1;
    }
    else if (psdToggle && $(window).width() >= 397) {
        psdToggle = 0;
        document.getElementById('PSDPlug').innerHTML = "Timelapse Photoshop Plugin";
    }
}

$(document).ready(function() {
    var channel = 'UCDrekHmOnkptxq3gUU0IyfA';
    var channel2 = 'UC5KrfqwKBqb5geIh6tHqO4Q';
    var key = 'AIzaSyBroKwS1hxt8GHatnfHMaDsTxTHH611gzU';

    var totalSubs = 0;
    var totalViews = 0;

    loadChannel(channel, channel2, key);

    function loadChannel(channel, channel2, key) {
        var url = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' + channel + '&key=' + key;
        var url2 = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' + channel2 + '&key=' + key;
        $.getJSON(url, function(data) {
            totalSubs = parseInt(data.items[0].statistics.subscriberCount, 10);
            totalViews = parseInt(data.items[0].statistics.viewCount, 10);

            $.getJSON(url2, function(data) {
                totalSubs += parseInt(data.items[0].statistics.subscriberCount,10);
                totalViews += parseInt(data.items[0].statistics.viewCount, 10);
                $('.odoSubs').html(totalSubs);
                $('.odoViews').html(totalViews);
            });
        });

    }
    window.setInterval(function(){
      loadChannel(channel, channel2, key);
    }, 1000);
});

var mouseOverToggle = 1;
function mouseOver() {
    mouseOverToggle++;

    if(mouseOverToggle % 2 == 0) {
        $('.backBlur').css({
            "-webkit-transition":"all 0.3s ease-out",
            "transition":"all 0.3s ease-out",
            "background-color":"rgba(0,0,0,0)"
        });
    }
    else {
        $('.backBlur').css({
            "-webkit-transition":"all 0.3s ease-out",
            "transition":"all 0.3s ease-out",
            "background-color":"rgba(0,0,0,0.5)"
        });
    }
}
