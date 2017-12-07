<!DOCTYPE html>

<html>
 
<head>
   <title>Tap Finder</title>
      <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
	<!-- for making ajax request-->
   <script type="text/javascript" src="js/liveSearch.js"></script>

	<!-- JQuery smooth scroll for SPA-->
 	<script type="text/javascript" src="smoothScroll.js"></script>

   <!-- for CSS file. -->
   <link rel="stylesheet" type="text/css" href="search.css">

   
</head>
 
<body>
 

<!-- Search box. -->

   <input type="text" id="building_name" placeholder="Enter building name"/>
 
   <br><b>Ex: </b><i>Mckeldin, Stamp</i><br/>
 
   <!-- Search Suggestions is displayed here -->
   <div id="Suggestions"></div>
 
 <!-- This is an attempt to make this a Single Page Application -->


 	<!-- Main Navigation, import style sheet-->
 	<div id="main-nav">
 		<ul>
 			<li><a href="#home">Home</a></li>
 			<li><a href="#about">About</a></li>
 			<li><a href="#admin">Admin</a></li> 			
 		</ul>
 	</div>

	<!-- home page content goes in here, import style sheet-->
 	<div id="home_pg">
 		<a id="home_lnk"></a>	
 		Home content goes in here
 	</div>

 	<!-- about page content goes in here, import style sheet-->
 	
<div class ="container p-5" style="background-color: white; border:1px solid black">
   <h3> <img src="logo.svg" alt="Logo" style="width:40px"> TapFinder</h3> </br>
   <p> 
      TapFinder is focused for University of Maryland, College Park (UMCP)</br>
      We built this system to help users find filtered water stations around UMDCP</br>
   </p>
   <h4>Ideal Scenario</h4>
   <ul>
      <li>Thirsty student is walking to class with an empty bottle</li>
      <li>Student opens the website and types name of building thats on the way to his/her class.</li>
      <li>Student finds the location of water filling station, and pops in the building for quick refill</li>
      <li>Student is hydrated and is on the way to class</li>

   </ul>
   <h4>Overarching goals</h4>
   <p>Our overarching goal is to help solve the issue of dehydration. Often times student may be so invested in their work, schedule, exams etc. that they do not hydrate properly. This can affect students physical health and academic performance. By building a system to find location of a water source, we are striving to ultimately help improve the health of students and faculty on campus.</p>

   <h4>Team</h4>
   <ul>
      <li>Aseem Dhakal, BSIS</li>
      <li>Bukar Sun Aibe, BSIS</li>
      <li>Kyle Chin, BSIS</li>
      <li>Oni Oluwayesi, BSIS</li>
   </ul>

   <!-- Button to Open the Modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
   onmouseover="" style="cursor: pointer;">
      Show Contact Information
   </button>

   <!-- The Modal -->
   <div class="modal fade" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
               <h4 class="modal-title">Contact Email</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               contact_tapfinder@gmail.com
            </div>
            <div class="modal-body">
               Please state your purpose in the subject line
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

         </div>
      </div>
   </div>

</div>
 	</div>

 	<!-- about page content goes in here, import style sheet-->
 	<div id="admin_pg">
 		<a id="admin_lnk"></a>	
 		Admin content goes in here
 	</div>

</body>

</html>