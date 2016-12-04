<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}

?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Dashboard: Learn-It</title>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="dashboard.css">
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      </head>
        <body>
          <nav class="blue-grey darken-4">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out </a></li>
             </ul>
          
            </div>
          </nav>
          
            <div class="row">
              <div class="align">
                <div class="card z-depth-3 backgroundclr">
                  <div class="card-content white-text">
                    <div class="col s6 padding">
                    <span class="card-title text bold white-text">
                      <p class="">Dashboard</p>
                    </span>
                    <br>
                    <p class="text" id="result">Welcome to Learn-It, <?php echo $_SESSION['userName'] ; ?>! Let's start learning.</p>
                    <p class = "text">This is your dashboard, your one stop for everything related to your account. Create your own personalized set or start preparing your created sets. </p> 
                    <br>
                    <br>
                    <br>
                    <a href="create.php" class="pad white-text text waves-effect waves-light btn pink darken-1">Create Set</a>

                     <a href="explore.php" class="pad white-text text waves-effect waves-light btn light-green darken-3">Explore</a>
                   
                    </div>
                   <div class="col s6">
                    <img class="dashboardimg" src="image/dashboard.jpg">
                   </div>
                    <div class="card-action">
                     

                   </div>
                  </div>
              </div>
            </div>
        </div>
    
      
      <div class="row">
        <div class="align">
        <div class="col s6 cardsize">
        
        
          <div class="card blue-grey darken-2 z-depth-5 text">
            <div class="card-content white-text">
              <span class="card-title bold green-text text-lighten-2">Account Manager</span>
              <br>
              <br>
              <p>Manage your account, personal information, email address and avatar here.</p>
            </div>
            <div class="card-action">
              <a href="control_panel.php">MANAGE</a>
            </div>
          </div>
        
      </div>
    
      <div class="col s6 cardsize">
          <div class="card z-depth-3 text">
            <div class="card-content">
              <span class="card-title bold green-text text-darken-4">Browse</span>
              <br>
              <br>
              <p>Trouble getting started? don't worry. Get started easily with our predefined sets.</p>
            </div>
            <div class="card-action">
              <a href="browse.php" class="green-text text-darken-3">Begin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
            

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      </body> 
