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

<div id="home" class="sections">
   <h1> ADMIN </h1>

   <div id="loginForm">
      <!-- LOGIN FORM -->
      <form action = "adminlog.php" method="POST">

         <div class="form-group">
            <label for="usr">ADMIN EMAIL:</label>
            <input type="text" class="form-control" id="usr" name = "adminEmail" >
         </div>
         <div class="form-group">
            <label for="pwd">ADMIN PASSWORD:</label>
            <input type="password" class="form-control" id = "pwd" name = "adminPassword"> 
         </div>      
         <button id="submitlogin"> Log In </button>
      </form>
   </div>
</div>

</body>
</html>