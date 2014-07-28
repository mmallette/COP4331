var address = document.getElementById('address').value;
var table = document.getElementById("tideTable");
jQuery(document).ready(function($) {
	
    $( "#button" ).click(function() {
        $('#TideTitle').empty();
		 $('#tideTable').empty();
        address = document.getElementById('address').value;
		
        $.ajax({ url : "http://api.wunderground.com/api/11f2c2de78ec01f3/tide/q/"+ address +".json",
            dataType : "jsonp",
            success : function(parsed_json) {
                
                var location = parsed_json.tide.tideInfo[0].tideSite;
				
		if(location=="")
				{
					$("#TideTitle").append("<h3>Sorry no data availabe for specified location. Try another location.</h3>");
					return;
				}		
                
                $("#TideTitle").append("<h3>Tide Weather Conditions for " + location + ".</h3>");
                var row = table.insertRow(0);
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				cell1.innerHTML = "High &emsp;&emsp;";
				cell1.style.textAlign="right";
				cell2.innerHTML = "&emsp;&emsp;Tide";
				cell3.innerHTML = "Low&emsp;&emsp;";
				cell3.style.textAlign="right";
				cell4.innerHTML = "&emsp;&emsp;Tide";
				var row1 = table.insertRow(1);
				var cell5 = row1.insertCell(0);
				var cell6 = row1.insertCell(1);
				var cell7 = row1.insertCell(2);
				var cell8 = row1.insertCell(3);
				cell5.innerHTML = "Date";
				cell5.style.textAlign="center";
				cell6.innerHTML = "Height";
				cell6.style.textAlign="center";
				cell7.innerHTML = "Date";
				cell7.style.textAlign="center";
				cell8.innerHTML = "Height";
				cell8.style.textAlign="center";
				var row2 = table.insertRow(2);
				var cell9 = row2.insertCell(0);
				var cell10 = row2.insertCell(1);
				var cell11 = row2.insertCell(2);
				var cell12 = row2.insertCell(3);
				cell9.id = 'highdate';
				cell9.style.padding="20px";
				cell10.id = "highheight";
				cell10.style.padding="20px";
				cell11.id = "lowdate";
				cell11.style.padding="20px";
				cell12.id = "lowheight";
				cell12.style.padding="20px";
				
				for (i=0; i<30; i++)
				{
					var info0Time = parsed_json.tide.tideSummary[i].date.pretty;
					var info0Type = parsed_json.tide.tideSummary[i].data.type;
					var info0Height = parsed_json.tide.tideSummary[i].data.height;
					if(info0Type == "High Tide")
					{
						$("#highdate").append("<p>"+info0Time+"</p>");
						$("#highheight").append("<p>"+info0Height+"</p>");
					}
					else if(info0Type == "Low Tide")
					{
						$("#lowdate").append("<p>"+info0Time+"</p>");
						$("#lowheight").append("<p>"+info0Height+"</p>");
					}
				}
				
            }
        });
    });
});
