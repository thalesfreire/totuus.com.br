
function getDetalheDevice(lat, long) {
	
	
	var result = null;
	
	var url = "actions/homeAction.php?method=getGeocodeXML&lat="+lat+"&long="+long;
	
	$.ajax({
		   url: url,
		   type: 'get',
		   dataType: 'html',
		   async: false,
		   success: function (data) {
		   		$(data).find("result").each(function(){
					result = $(this).find("formatted_address").text();
					return false;		
				});
		   }
	});
	return result;
	
	
	
	
}



