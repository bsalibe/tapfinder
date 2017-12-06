//update gets each query row result
function update(inputString){
	//gets possible building name 
	$('#building_name').val(inputString);
	//dont show any suggestions yet
	$('#suggestions').hide();
}

$(document).ready(function(){
	//key up is called upon key press 
	$('#building_name').keyup(function(){

		var building = $('#building_name').val();
		//make sure there's some user input
		if (building != ""){
			//make ajax call
			$.ajax({
				type: "POST",
				//where to post
				url: "buildingsearch.php",								
				//data to post
				data: {
					building_name: building
				},
				success: function(html){
					//show suggested building names
					$('#suggestions').html(html).show();
				}

			});
		}
		//no user input
		else{
			//cant show any suggestions without any input
			$('#suggestions').html("");
		}

	});

});