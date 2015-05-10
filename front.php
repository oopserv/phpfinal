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
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
       <a class="navbar-brand" href="front.php">Myron McTyer</a>
      </div>
      <div id="navDiv">
        <ul class="nav navbar-nav ">
          <li class="active"><a href="front.php">Front</a></li>
          <li><a href="story.php">Story</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="reg.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="logout.php">LogOut</a></li>
         </ul>
         <img class="img-responsive img-rounded" align="right" src="images/m.jpg" alt="letterM" width="75" height="75">
       </div>
    </div>
  </nav>
  <div class="container" id="mainContent"> 
    <div class="row">
      <div class="col-md-2 leftStarter">
          Thank you for taking a look at my website. My hopes is that through this website, you find a better understanding of who I am and what I am about. 
          Take some time and look around, and be sure to drop me a message in the contact section if you have any questions or if you just want to say hi.
      </div>
      <div class="col-md-9 rightCol-top">
          I am currently in the spring semester at Butler CC.  I am taking 5 classes this semester and it is going well.  
          I will have 2 classe to take this semester before I earn my associates degree in software development.
          I must say that my attention has been drawn to web development lately.  I'm having a lot of fun learning
          web technologies and think I will continue expanding my web development skills in the future.

      </div>
      <div class="col-md-9" id="currentEvents">
        As touched in my story section, my focus has shifted to the web development technologies.  The abilities are endless and I am excited what I will be able 
        to accomplish in the future. I have done a lot of reading about the Ruby Programming language and the Ruby on Rails framework.  I've had to deny my urge to dive into learning it just yet because of my heavy class load this semester.  I plan to delve into this framework this summer and use it on some projects. 
        Something else really worth getting excited over is the new Slack group I recently joined.  The team is small now but we plan on adding additional members who can
        help contribute to our upcoming projects.  
      </div>
      <div class="col-md-9" id="sportsInfo">
        <img class="img-responsive" src="images/goPats.jpg" alt="letterM" width="2000" height="125">
        This year my New England Patriots defeated the defending World Champions, The Seattle Seahawks to win their 4th title.  The game was a nail bitter and ended with 
        one of the most memorable plays in SuperBowl history.  There has been much critism place on the Seattle Seahawns coach Peter Carroll.  He decided to go with a place
        play that was intercepted at the Patriots one yard line.  Many say the obvious play would have been to simply run the play with star running back Marshawn Lynch.  There were many plays leading up to this wild finish that made this SuperBowl one of the best I've ever seen.
       </div>

     </div>
    </div>
  </div>
</div>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3" id="copyR">
       

         <?php
            $time = time();
            $year = date("Y",$time)."<br>";

            echo("Myron M creation. ".$year);   

         ?>
       </div>
       <div class="col-md-6 col-md-offset-3">
        Check me out on Social Media<a href="http://www.facebook.com"><img class="img-responsive" src="images/fbicon.png" alt="fbIcon" width="30" height="30"></a>
       </div>

    </div>
    </div>
  </div>
  <script src="js/frontjs.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html> 