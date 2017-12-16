<!DOCTYPE html>

<html>

<head>
   <title>Tap Finder</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- google fonts -->
   <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
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
   <script type="text/javascript" src="liveSearch.js"></script>
   <!-- JQuery smooth scroll for SPA-->
   <!-- <script type="text/javascript" src="smoothScroll.js"></script> -->
   <!-- for CSS file. -->
   <link rel="stylesheet" type="text/css" href="tapfinder.css">  

   <!-- LOG IN SCRIPT-->

   <script>
      $(document).ready(function(){
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
      <a class="nav-link" href="tapfinder.php">HOME</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="#info-2">ABOUT</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="#login">LOGIN</a>
   </li>

</nav>


<!-- HOME PAGE-->
<section id="introduction" align-items-center>  
   <div class="container">
      <h1 class= "text-white main-head">Tap Finder <span style="color: red">UMD</span></h1>
         <div class="input-group align-search" id= "response_form">      
               <input type="text" id="search" class="form-control" name="building_name" placeholder="Enter building name..." aria-label="Search for..." autofocus="autofocus">
               <!-- <input type="submit" id="submit_btn" name="submit"> -->
               <span class="input-group-btn">
                  <button id= "submit_btn" class="btn btn-success" type="button">Go!</button>
               </span>      
         </div>
         <div id="display" class="text-white"></div>
         <div class="row fill-viewport"></div>

  </div>

</section>

<!-- ABOUT PAGE -->

<section id="info-2" class="bg-dark">
<h1 style="padding-top: 30px; color: #0EA2F0FF"> About Us</h1>
 <div class="container">
   <div class="row align-items-center fill-80-viewport">
     <div class="col-12 col-md-6 my-5 order-2 order-md-1">
       <p class="lead text-white-70"><strong>Tap Finder helps students locate water filling stations across campus.</strong></p>
       <h3 class="text-uppercase text-white">Overarching Goal</h3>
       <p class="lead text-white-70">TapFinder is focused for University of Maryland, College Park (UMCP).
      We built this system to help users find filtered water stations around UMD. <em><span style="color: #0EA2F0FF">Our overarching goal is to help solve the issue of dehydration in a sustainable way.</span></em> Often times student may be so invested in their work, schedule, exams etc. that they do not hydrate properly. This can affect students physical health and academic performance. By building a system to find location of a water source, we are striving to ultimately help improve the health of students and faculty on campus.</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
   onmouseover="" style="cursor: pointer;">
   Show Contact Information
   </button>
      
     </div>
     <pre class="col-12 col-md-6 my-5 order-1 order-md-2 py-4 border border-info rounded text-info">
      <span></span> <h4>Ideal Scenario</h4>
      <span>1.</span> Thirsty student is walking to class with an empty bottle.
      <span>2.</span> Student opens the website and types name of building 
      <span></span>   thats on the way to his/her class. 
      <span>3. </span>Student finds the location of water filling station,       
      <span></span>   and pops in the building for quick refill.
      <span>4.</span> Student is hydrated and is on the way to class.          
      <span></span>     <h4>The Team</h4>
      <span>1. </span> Aseem Dhakal, BSIS
      <span>2. </span> Bukar Sun Aibe, BSIS 
      <span>3. </span> Kyle Chin, BSIS
      <span>4. </span> Oni Oluwaseyi, BSIS     
      </pre>
   </div>
 </div>
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
</section>
   

<div id="login" class="sections">
   <h1 style="color: #0EA2F0FF">Login</h1>

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