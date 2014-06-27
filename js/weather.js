
var address = document.getElementById('address').value;

jQuery(document).ready(function($) {

    $( "#button" ).click(function() {
        $('#weatherBox').empty();

        address = document.getElementById('address').value;

        $.ajax({ url : "http://api.wunderground.com/api/11f2c2de78ec01f3/geolookup/conditions/q/FL/" + address +".json",
            dataType : "jsonp",
            success : function(parsed_json) {
                
                var location = parsed_json['location']['city'];
                var temp_f = parsed_json['current_observation']['temp_f'];
                var humidity = parsed_json['current_observation']['relative_humidity'];
                var wind = parsed_json['current_observation']['wind_string'];
                var heat_index = parsed_json['current_observation']['heat_index_string'];
                var windchill = parsed_json['current_observation']['windchill_f'];
                var feelslike = parsed_json['current_observation']['feelslike_f'];
                var visibility = parsed_json['current_observation']['visibility_mi'];
                var uv = parsed_json['current_observation']['UV'];
                var precipitation = parsed_json['current_observation']['precip_today_string'];
                
                $("#weatherBox").append("<h1>Current Weather Conditions for " + location + ", Florida</h1>");
                $("#weatherBox").append("<p>Current temperature is: " + temp_f + ", but it feels like: " + feelslike + "</p>");
                $("#weatherBox").append("<p>Current humidity is: " + humidity + "</p>");
                $("#weatherBox").append("<p>Current heat index is: " + heat_index + "</p>");
                $("#weatherBox").append("<p>Current wind conditions are: " + wind + "</p>");
                $("#weatherBox").append("<p>Current windchill is: " + windchill + "</p>");
                $("#weatherBox").append("<p>Current visibility: " + visibility + "</p>");
                $("#weatherBox").append("<p>Current UV: " + uv + "</p>");
                $("#weatherBox").append("<p>Today's precipitation: " + precipitation + "</p>");

                if(temp_f > 85){
                    $("#weatherBox").append('<img src="http://images.clipartof.com/thumbnails/1206167-Cartoon-Of-A-Happy-Blue-Water-Drop-Holding-A-Bottle-Of-Water-Royalty-Free-Vector-Clipart.jpg" alt="some_text">');
                    $("#weatherBox").append("<p>Its hot out there bring water homie!</p>");
                }
            }
        });
    });
    
    $.ajax({ url : "http://api.wunderground.com/api/11f2c2de78ec01f3/geolookup/conditions/q/FL/" + address +".json",
        dataType : "jsonp",
        success : function(parsed_json) {
            
            var location = parsed_json['location']['city'];
            var temp_f = parsed_json['current_observation']['temp_f'];
            var humidity = parsed_json['current_observation']['relative_humidity'];
            var wind = parsed_json['current_observation']['wind_string'];
            var heat_index = parsed_json['current_observation']['heat_index_string'];
            var windchill = parsed_json['current_observation']['windchill_f'];
            var feelslike = parsed_json['current_observation']['feelslike_f'];
            var visibility = parsed_json['current_observation']['visibility_mi'];
            var uv = parsed_json['current_observation']['UV'];
            var precipitation = parsed_json['current_observation']['precip_today_string'];
            
            $("#weatherBox").append("<h1>Current Weather Conditions for " + location + "</h1>");
            $("#weatherBox").append("<p>Current temperature is: " + temp_f + ", but it feels like: " + feelslike + "</p>");
            $("#weatherBox").append("<p>Current humidity is: " + humidity + "</p>");
            $("#weatherBox").append("<p>Current heat index is: " + heat_index + "</p>");
            $("#weatherBox").append("<p>Current wind conditions are: " + wind + "</p>");
            $("#weatherBox").append("<p>Current windchill is: " + windchill + "</p>");
            $("#weatherBox").append("<p>Current visibility: " + visibility + "</p>");
            $("#weatherBox").append("<p>Current UV: " + uv + "</p>");
            $("#weatherBox").append("<p>Today's precipitation: " + precipitation + "</p>");
            
            if(temp_f > 85){
                $("#weatherBox").append('<img src="http://images.clipartof.com/thumbnails/1206167-Cartoon-Of-A-Happy-Blue-Water-Drop-Holding-A-Bottle-Of-Water-Royalty-Free-Vector-Clipart.jpg" alt="some_text">');
                $("#weatherBox").append("<p>Its hot out there bring water homie!</p>");
            }
        }
    });  
});
