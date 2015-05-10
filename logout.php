<!DOCTYPE html>

<html lang="en">
<head>
  <title>Myron Who?</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
  <div id="wrap">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
       <a class="navbar-brand" href="front.php">Myron McTyer</a>
      </div>
      <div id="navDiv">
        <ul class="nav navbar-nav ">
          <li><a href="front.php">Front</a></li>
          <li><a href="story.php">Story</a></li>
          <li><a href="contact.php">Contact</a></li> 
          <li><a href="reg.php">Register</a></li>
          <li class="active"><a href="login.php">Login</a></li> 
         </ul>
       </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class ="col-md-3 col-md-offset-4">
    <h4>You have been logged out.</h4>
      <p>You will be redirected.....</p>
      <?php
        
        require_once('loggedOut.php');
        echo "<br>session variable: ". $_SESSION[loggedin];

      ?>
  </div>
  </div>
  </div>
</div>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3" id="copyR">
         Myron M creation. 2015
       </div>
 

    </div>
    </div>
  </div>

  <script src="js/forms.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html> 

