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
</head>

<body>

	<div id="loginForm">
      <form action = "tapfinder.php?#login"><button class="btn btn-danger"><- Go Back to Login</button></form>
      <!-- LOGIN FORM -->
      <form action = "register.php" method="POST">
      	<h1>Sign Up</h1>

         <div class="form-group">
            <label for="usr">Email:</label>
            <input type="text" class="form-control" id="usr" name = "email" >
         </div>
         <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id = "pwd" name = "password"> 
         </div>
         <div class="form-group">
            <label for="usr">First Name:</label>
            <input type="text" class="form-control" id="firstname" name = "user_first_name" >
         </div>
         <div class="form-group">
            <label for="usr">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name = "user_last_name" >
         </div>
         <button id="submitlogin" class ="btn btn-success"> Register </button> <br><br>

      </form>
   </div>

</body>