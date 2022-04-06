defaultLoad();

		 	function defaultLoad(){

		 		$("#default").show();
		 		$("#orderHistory").hide();
		 		$("#orderTracking").hide();

		 	}


		 	function orderHistory(){

		 		$("#orderTracking").hide();
		 		$("#default").hide();
		 		
		 		$( "#orderHistory" ).show( "slow", function() {
		 			
		 		});

		 	}


		 	function orderTracking(){

		 		$("#orderHistory").hide();
		 		$("#default").hide();

		 		$( "#orderTracking" ).show( "slow", function() {
		 			
		 		});

		 	}
