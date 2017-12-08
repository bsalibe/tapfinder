<!DOCTYPE html>

<html lang="en">
 
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <title>Tap Finder</title>
<<<<<<< HEAD
   <script src="js/jquery-3.2.1.js"></script>
   <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
=======
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

>>>>>>> 61a7988d2be5cb8ee0b6c79ba082e52d9d744ea5
 


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