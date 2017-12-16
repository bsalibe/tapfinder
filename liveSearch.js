function fill(Value) {
   //Assigning value to "search" div in "search.php" file.
   $('#search').val(Value);
   //Hiding "display" div in "search.php" file.
   $('#display').hide();
}
 
$(document).ready(function() {
   //On pressing a key on "Search box" in "tapfinder.php" file. This function will be called
   $("#search").keyup(function() {
       
       var name = $('#search').val();
       //Validating, if nothing is entered
       if (name == "") {
           //no suggestions to give
           $("#display").html("");
       }
     
 
       else {

           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",               
               url: "buildingsearch.php",
               //Data, that will be sent to "buildingsearch.php".
               data: {
                   //Assigning value of "name" into "search" variable.
                   building_name: name
               },
               //If result found, this funtion will be called.
               success: function(some_building) {
                   //Assigning result to "display" div in "search.php" file.

                   $("#display").css("cursor", "pointer");
                   $("#display").html(some_building).show();
               }

           });
       }
   });

	$("#submit_btn").click(function() {
       //Assigning search box value to javascript variable named as "name".       
       var building = $('#search').val();
       //Validating, if "name" is empty.
       if (building == "") {
           alert("enter a building first");
       }
       //If name is not empty.
 
       else {

           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",               
               url: "findStation.php",
               //Data, that will be sent to "buildingsearch.php".
               data: {
                   //variable we want to search for in db.
                   building_name: building
               },
               //If the such building exists this function will be called.
               success: function(some_room) {
                   //Assigning result to "display" div in tapfinder.php
                   
                   $("#response_form").html("<div id='message' class= text-white></div>");                   
                   $("#message").html("<p> Water stations are in </p>");
				   $("#message").html(some_room); 					   
				   
               }
           });
           

       }

   });   
});