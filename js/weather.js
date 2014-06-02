/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($) {
    
    $.ajax({ url : "http://api.wunderground.com/api/11f2c2de78ec01f3/geolookup/conditions/q/FL/Orlando.json",
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
        }
    });
    
});
