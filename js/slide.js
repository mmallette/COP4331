/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    
    $("#slide2").hide();
    $("#slide3").hide();
    
    var counter = 3;
    
    setInterval(function() {
        
        if (counter === 0){
            $("#slide1").show();
            $("#slide2").hide();
            $("#slide3").hide();
        } else if (counter === 1){
            $("#slide1").hide();
            $("#slide2").show();
            $("#slide3").hide();
        } else if (counter === 2){
            $("#slide1").hide();
            $("#slide2").hide();
            $("#slide3").show();
        } else if (counter === 3){
            $("#slide1").show();
            $("#slide2").hide();
            $("#slide3").hide();
        }
        
        counter = (counter + 1) % 3;
        
    }, 3000 );
    
    
});

