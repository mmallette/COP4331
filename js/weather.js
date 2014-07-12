


var address = document.getElementById('address').value;

jQuery(document).ready(function($) {

    $( "#button" ).click(function() {
        $('#heading').empty();
        $('#radar').empty();
        $('.temp').empty();
        $('.wind').empty();
        $('.visibility').empty();
        $('.humidity').empty();
        $('.UV').empty();
        $('.conditions').empty();
        $('#nowcast').empty();

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
            var icon = parsed_json['current_observation']['icon'];
            var conditions = parsed_json['current_observation']['weather'];
            var nowcast = parsed_json['current_observation']['nowcast'];
            
            $("#heading").append("<h1>Weather for " + location + ", Florida</h1>");
            $("#radar").append('<img id = "radarImg" src="http://api.wunderground.com/api/11f2c2de78ec01f3/animatedradar/q/FL/'+address+'.gif?newmaps=1&timelabel=1&timelabel.y=10&num=10&delay=50" alt="radar">');
            $(".temp").append("<p>Temperature:<br><span style='font-size:40pt'>" + temp_f + "</span> F<br>Feels Like " + feelslike + "</p>");
            $(".wind").append("<p>Wind: " + wind + "</p>");
            $(".visibility").append("<p>Visibility: " + visibility + " mi.</p>");
            $(".humidity").append("<p>Humidity is: " + humidity + "</p>");
            $(".UV").append("<p>UV Index: " + uv + "</p>");
            $(".conditions").append("<p>" + conditions + "</p>");    
            $(".conditions").append('<img id="weatherIcon" src="http://icons.wxug.com/i/c/k/'+icon+'.gif" alt="icon">');
            $("#nowcast").append('<br><p>'+nowcast+'</p><br>');

            if(feelslike > 85){
                $(".hydrate").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            if(uv > 5){
                $(".sunscreen").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            if(!(conditions == "Clear" || conditions == "Patches of Fog" || conditions == "Shallow Fog" || conditions == "Partial Fog" || conditions == "Overcast" || conditions == "Partly Cloudy" || conditions == "Mostly Cloudy" || conditions == "Scattered Clouds")){
                $(".breezy").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            $('.activePrecaution.popover-dismiss').popover({
                trigger: 'focus'
            })
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
            var icon = parsed_json['current_observation']['icon'];
            var conditions = parsed_json['current_observation']['weather'];
            var nowcast = parsed_json['current_observation']['nowcast'];
            
            $("#heading").append("<h1>Weather for " + location + ", Florida</h1>");
            $("#radar").append('<img id = "radarImg" src="http://api.wunderground.com/api/11f2c2de78ec01f3/animatedradar/q/FL/'+address+'.gif?newmaps=1&timelabel=1&timelabel.y=10&num=10&delay=50" alt="radar">');
            $(".temp").append("<p>Temperature:<br><span style='font-size:40pt'>" + temp_f + "</span> F<br>Feels Like " + feelslike + "</p>");
            $(".wind").append("<p>Wind: " + wind + "</p>");
            $(".visibility").append("<p>Visibility: " + visibility + " mi.</p>");
            $(".humidity").append("<p>Humidity is: " + humidity + "</p>");
            $(".UV").append("<p>UV Index: " + uv + "</p>");
            $(".conditions").append("<p>" + conditions + "</p>");    
            $(".conditions").append('<img id="weatherIcon" src="http://icons.wxug.com/i/c/k/'+icon+'.gif" alt="icon">');
            $("#nowcast").append('<br><p>'+nowcast+'</p><br>');

            if(feelslike > 85){
                $(".hydrate").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            if(uv > 5){
                $(".sunscreen").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            if(!(conditions == "Clear" || conditions == "Patches of Fog" || conditions == "Shallow Fog" || conditions == "Partial Fog" || conditions == "Overcast" || conditions == "Partly Cloudy" || conditions == "Mostly Cloudy" || conditions == "Scattered Clouds")){
                $(".breezy").removeClass("inActivePrecaution").addClass("activePrecaution");
            }

            $('.activePrecaution.popover-dismiss').popover({
                trigger: 'focus'
            })
        }
    });
});
