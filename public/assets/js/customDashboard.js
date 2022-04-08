defaultLoad();

function defaultLoad(){

	$("#default").show();
	$("#orderHistory").hide();
	$("#orderTracking").hide();
	$("#quotes").hide();

}

function orderHistory(){

	$("#default").hide();
	$("#orderTracking").hide();
	$("#quotes").hide();
	
	
	$( "#orderHistory" ).show( "slow", function() {
		
	});

}

function orderTracking(){

	$("#default").hide();
	$("#orderHistory").hide();
	$("#quotes").hide();
	

	$( "#orderTracking" ).show( "slow", function() {
		
	});

}


function quotes(){

	$("#orderTracking").hide();
	$("#orderHistory").hide();
	$("#default").hide();

	$( "#quotes" ).show( "slow", function() {
		
	});

}
