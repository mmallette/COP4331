/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var myCenter = new google.maps.LatLng(28.597725, -81.176486);
var marker;

function initialize(){
    var mapProp = {
        center:myCenter,
        zoom:14,
        mapTypeId:google.maps.MapTypeId.HYBRID
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    marker = new google.maps.Marker({
        position:myCenter,
        animation:google.maps.Animation.BOUNCE
        });

        marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);