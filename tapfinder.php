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
   <link rel="stylesheet" type="text/css" href="tapfinder.css">  

   <!-- LOG IN SCRIPT-->

   <script>
      $(document).ready(function(){}
         $("#submitlogin").click(function(){
            user = $('input[name = "email"]').val();
            password = $('input[name = "password"]').val();
            $.post("userlogged.php"),
            {
               email: email,
               password: password
            }
         });
      });
   </script>



</head>

<!-- AUTOMATIC PAGE SCROLL WITH CLICK -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">


  <!-- Main Navigation, import style sheet-->
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
   <a class="navbar-brand" href=>
     <img src="logo.svg" alt="Logo" style="width:50px;">
  </a>
  <ul class="navbar-nav">
     <li class="nav-item">
      <a class="nav-link" href="#home">HOME</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="#about">ABOUT</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="#login">LOGIN</a>
   </li>

</nav>


<!-- HOME PAGE-->
<div id="home" class="sections">


   <h1> HOME </h1>

   <input type="text" id="building_name" placeholder="Enter building name"/>
   <br><b>Ex: </b><i>Mckeldin, Stamp</i><br/>

   <!-- Search Suggestions is displayed here -->
   <div id="Suggestions"></div>


</div>

<!-- ABOUT PAGE -->

<div id ="about" class="sections">
   <h1> ABOUT </h1>
   <h3> <img src="logo.svg" alt="Logo" style="width:40px"> What is Tapfinder</h3> </br>
   <p> 
      TapFinder is dynamic web application that helps locate water filling stations.</br>
      TapFinder is focused for University of Maryland, College Park (UMCP)</br>
      We built this system to help users find filtered water stations around UMD, CP</br>
   </p>
   <h3>Ideal Scenario</h3>
   <ul>
      <li>Thirsty student is walking to class with an empty bottle</li>
      <li>Student opens the website and types name of building thats on the way to his/her class.</li>
      <li>Student finds the location of water filling station, and pops in the building for quick refill</li>
      <li>Student is hydrated and is on the way to class</li>

   </ul>
   <h3>Overarching goals</h3>
   <p>Our overarching goal is to help solve the issue of dehydration. Often times student may be so invested in their work, schedule, exams etc. that they do not hydrate properly. This can affect students physical health and academic performance. By building a system to find location of a water source, we are striving to ultimately help improve the health of students and faculty on campus.</p>

   <h3>Team</h3>
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
            Please state your purpose in the subject line when you email
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
<div id="login" class="sections">
   <h1>LOGIN</h1>

   <div id="loginForm">
      <!-- LOGIN FORM -->
      <form action = "userlogged.php" method="POST">

         <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="usr" name = "email" >
         </div>
         <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id = "pwd" name = "password"> 
         </div>
         <button id="submitlogin" class="btn btn-success"> Log In </button> <br><br>Not Registered? Sign up with the button below!!

      </form>
      <form action = "signup.php" method ="POST">
         <button id="signup" class="btn btn-warning">Sign up</button>
      </form>
   </div>
</div>

</body>

</html>