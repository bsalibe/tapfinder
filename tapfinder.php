<!DOCTYPE html>

<html lang="en">
 
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <title>Tap Finder</title>
   <script src="js/jquery-3.2.1.js"></script>
   <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
 


	<!-- for making ajax request-->
   <script type="text/javascript" src="js/liveSearch.js"></script>

	<!-- JQuery smooth scroll for SPA-->
 	<!-- <script type="text/javascript" src="js/smoothScroll.js"></script> -->

   <!-- for CSS file. -->
   <link rel="stylesheet" type="text/css" href="search.css">

   
</head>
 
<body>
 
   <!-- Main Navigation, import style sheet-->   
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>


<!-- Search box. -->
   <div class="col-lg-6">
      <div class="input-group">
         <input type="text" id="building_name" class="form-control" placeholder="Enter building name"  aria-label="Enter building name"><span class="input-group-btn">
           <button class="btn btn-secondary" type="button">Go!</button>           
         </span>         
      </div>                             
      <!-- Search Suggestions is displayed here -->
      <div id="Suggestions"></div>
   </div>
 <!-- This is an attempt to make this a Single Page Application -->

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
 	<div id="login_pg">
 		<a id="login_lnk"></a>	
 		Admin content goes in here
 	</div>

   <!-- bootstrap files -->
   <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>