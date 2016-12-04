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
      <title>Browse: Learn-It</title>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">

        .heading {
          width: 145px;
          height: 60px;
          padding-left: 20px;

        }

        .padding {
          padding-left: 30px;
          padding-right: 30px;
          padding-top: 10px;
          padding-bottom: 25px;
        }
        @font-face {
          font-family: google;
          src: url('font/google.ttf');
        }

        @font-face {
          font-family: thickness;
          src: url('font/thick1.ttf');
        }

         @font-face {
          font-family: stilu;
          src: url('font/stilu.otf');
        }
        @font-face {
          font-family: simple;
          src: url('font/simple.ttf');
        }

        @font-face {
          font-family: cheddar;
          src: url('font/cheddar.ttf');
        }


        .main {
          font-family: cheddar;
          color: #D4A41C;
          margin-bottom: 7px;
        }

        .logo {
          margin-top: 11px;
          width: 39px;
          height: 40px;
          margin-bottom: 7px;
          margin-left: 20px;
        }

        .nav-el {
          font-family: simple;
        }

        .text {
          font-family: google;
        }

        .text2 {
          font-family: cheddar;

        }
        .text3 {
          font-family: stilu;
        }
        .bold {
          font-weight: bolder;
        }

        body {
          background-color: #4db6ac;
        }

        .align {
          margin: 30px;
        }

        .btn-1 {
          margin-left: 480px;
        }

        .btn-2 {
          margin: 20px;
        }
        .align2 {
          

        }

        .align2 p {
          text-align: center;
        }

        .align2 img {
          margin-left: 288px;
        }

        .align3 {
          margin-left: 145px;
        }

        .align4 {

          margin-left: 230px;
        }

        .align5 {
          margin-left: 250px;
          color: #fff;
          font-size: 0.8em;
        }

        .align6 {
          margin-left: 330px;
          margin-top: 20px;
          margin-bottom: 50px;
          margin-right: 200px;
        }

        .color-text {
          color: #FFEB4A;
        }

        .button a {
          color: black;
        }

        .align12 {
          margin-left: 15px;
        }

        .align9 {
          margin:30px;
        }

        .img_margin {
          margin-left: 150px;
        }

        .align2 a {
        	margin-left: 220px;
        }
        .cardsize {
          width: 600px;
          height: 200px;
        }

        .scale {
          width: 500px;
          height: 410px;
          margin-left: 120px;
        }
      </style>
      </head>
        <body>
          <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="dashboard.php">Dashboard </a></li>
              <li><a href="logout.php">Log Out </a></li>


             </ul>
          
            </div>
          </nav>
          
            <div class="row">
              <div class="align">
                <div class="card z-depth-2">
                  <div class="card-content">
                    <span class="card-title text bold green-text text-darken-2">
                      <p class="left-align padding">Browse</p>
                    </span>
                    
                    <p class="text left-align padding" id="result">Tired of adding every single word to your set? Don't worry we got your back. Start learning in a click with our handcrafted sets to help you learn easiliy and quickly. Here are few subjects to help you kickstart your learning : </p>
                    <br>
                  </div>
              </div>
            </div>
        </div>

          <div class="row">
              <div class="align">
                <div class="card hoverable z-depth-2">
                  
                  <div class="card-content">
                    <div class="col s5">
                      <span class="card-title text bold pink-text text-darken-2">
                      <p class="left-align padding">English</p>
                    </span>
                    
                    <p class="text left-align padding" id="result">Spoken in many countries around the world, it is the first language of the United Kingdom, the United States, Canada, Australia, Ireland, New Zealand and a number of Caribbean nations. There are about 375 million native speakers (people with first language as English). Start preparing now!</p>
                    <p class="text left-align padding"><a href="english.php" class="white-text text waves-effect waves-light btn pink darken-1">Start now</a></p>

                  </div>
                  <div class="col s4">
                    <img src="image/english.jpg" class="padding scale">
                    <br>
                  </div>
                  </div>
              </div>
            </div>
        </div>
                 <div class="row">
              <div class="align">
                <div class="card z-depth-2">
                  
                  <div class="card-content">
                    <div class="col s5">
                      <span class="card-title text bold grey-text text-darken-4">
                      <p class="left-align padding">French</p>
                    </span>
                    
                    <p class="text left-align padding" id="result">Commonly known as the language romance all around the world, The French language is the official language in 29 countries and the second most widely spoken mother tongue in the European territory. Get started now to learn the most elegant language wordlwide!</p>
                    <p class="text left-align padding"><a href="french.php" class="white-text text waves-effect waves-light btn grey darken-1">Start now</a></p>

                  </div>
                  <div class="col s4">
                    <img src="image/french.jpg" class="scale padding">
                    <br>
                  </div>
                  </div>
              </div>
            </div>
        </div>
           <div class="row">
              <div class="align">
                <div class="card hoverable z-depth-2">
                  
                  <div class="card-content">
                    <div class="col s5">
                    <span class="card-title text bold purple-text text-darken-2">
                      <p class="left-align padding">Spanish</p>
                    </span>
                    
                    <p class="text left-align padding" id="result">The only language with approximately 470 million speakers, 410 of whom speak it as a first language while the remainder speak it as a second language. A significant number of people also speak Spanish as a foreign language. Spanish is spoken in Spain and 22 other countries. Get hang of the most common language in the world!</p>
                    <p class="text left-align padding"><a href="spanish.php" class="white-text text waves-effect waves-light btn purple darken-1">Start now</a></p>

                  </div>
                  <div class="col s4">
                    <img src="image/spanish.jpg" class="scale padding">
                    <br>
                  </div>
                  </div>
              </div>
            </div>
        </div>
  
  
    
      
            

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      </body> 
