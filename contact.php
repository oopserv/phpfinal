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
          <li class="active"><a href="contact.php">Contact</a></li> 
          <li><a href="reg.php">Register</a></li>
          <li><a href="login.php">Login</a></li>   
         </ul>
       </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class ="col-md-9 col-md-offset-1">
    <h3>Hi! I'd love to hear from you!</h3>
    <form id="contactForm" action="dbwork.php" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email addy">
      </div> 
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" class="form-control" id="firstName" name="firstname" placeholder="first name">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" name="lastname" placeholder="last name">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" name="message" placeholder="message" maxlength="200"></textarea>
      </div>
      <button type="submit" class="btn btn-default" value="Submit" id="subBtn">Submit</button>
    </form>
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

  <script src="js/frontjs.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html> 





