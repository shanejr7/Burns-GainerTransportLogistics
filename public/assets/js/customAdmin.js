

		 	defaultLoad();

		 	function defaultLoad(){

		 		$("#default").show();
		 		$("#orderHistory").hide();
		 		$("#orderTracking").hide();
		 		$("#orderRequest").hide();

		 	}


		 	function orderHistory(){

		 		$("#default").hide();
		 		$("#orderTracking").hide();
		 		$("#orderRequest").hide();

		 	
		 		$( "#orderHistory" ).show( "slow", function() {
		 			
		 		});

		 	}


		 	function orderTracking(){

		 		$("#default").hide();
		 		$("#orderHistory").hide();
		 		$("#orderRequest").hide();


		 		$( "#orderTracking" ).show( "slow", function() {
		 			
		 		});

		 	}



		 	function orderRequest(){

		 		$("#default").hide();
		 		$("#orderHistory").hide();
		 		$("#orderTracking").hide();

		 		$( "#orderRequest" ).show( "slow", function() {
		 			
		 		});

		 	}
