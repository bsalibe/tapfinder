<!DOCTYPE html>

<html>
 
<head>
   <title>Tap Finder</title>
 
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
 	<div id="about_pg">
 		<a id="about_lnk"></a>	
 		About content goes in here
 	</div>

 	<!-- about page content goes in here, import style sheet-->
 	<div id="admin_pg">
 		<a id="admin_lnk"></a>	
 		Admin content goes in here
 	</div>

</body>

</html>