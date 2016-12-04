<?php 
include "init.php";
session_start();
session_unset();
session_destroy();

echo '<script language="javascript">';
echo 'alert("Succesfully logged out.")';
echo '</script>';
header('Location: index.php');
?>

 <!DOCTYPE html>
  <html>
    <head>
      <title>Learn-It</title>
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

         .bg {
          position: relative;
          background-color: #293D48;
        }

        .bg p {
          position: absolute;
          right: 0;
          top: 0;
          padding-top: 125px;
          padding-left: 10px;
          padding-right: 150px;
          margin: 5px;
          color: #fff;
          font-weight: bold;
          font-size: 2.3em;
          font-family: 'Montserrat', sans-serif;
        }

        .bg a {
          position: absolute;
          top: 0;
          right: 0;
          margin-top: 240px;
          margin-right:350px;
        }

     
        .jumbo {
          width: 850px;
          height: 500px;
        }

        .nav-el {
          font-family: simple;
        }

        .second {
          background-color: #6DCFEC;
          width: 100%;
          height: 300px;
          
        }

        .third {
          width: 100%;
          height: 300px;
          background-color: #fff;
        }

        .fourth {
          background-color: #2EAEB7;
          width: 100%;
          height: 300px;
          color: #fff;
          margin-bottom: 0px;

        }

        .idea {
          width: 260px;
          height: 240px;
          margin-left: 160px;
          margin-top: 33px;
        }

        .learn-img {
          width: 515px;
          height: 240px;
          margin-right: 60px;
          margin-top: 33px;
        }        

        .heading {
          font-family: simple;
          color: #000000;
          font-size: 1.3em;

        }

        .text {
          font-family: 'Raleway', sans-serif;
        }

        .text2{
          margin: 77px;
        }

        .thick {
          margin-top: 45px;
          font-weight: 800;
        }

        .game-img {
          width: 400px;
          height: 230px;
          margin-top: 30px;
        }
        .subhead {
          margin: 37px;
          font-size: 2em;
          background-color: #fff;
        }

        .fit {
          margin-top: 30px;
          display: block;
          padding-left: 20px;
        }

        .stars {
          float: right;
          width: 480px;
          height: 500px;
          
        }

        .footer {
          position: relative;
        }
        .footer-img {
          width: 100%;
          height: 300px;
          position: absolute;
          left: 0;
          top: 0;
        }
        .text3 {
          z-index: 100;
          position: absolute;
          color: white;
          left: 450px;
          top: 85px;
          font-weight: bold;
          font-size: 2.15em;
          font-family: 'Montserrat', sans-serif;
        }

        .getbtn {
          z-index: 100;
          position: absolute;
          left: 780px;
          top: 121px;
        }

        .mm1 {
          z-index: 100;
          position: absolute;
          color: white;
          left: 600px;
          top: 230px;
          font-size: 0.85em;
          font-family:simple;
        }
        .mm2 {
          z-index: 100;
          position: absolute;
          color: white;
          left: 675px;
          top: 230px;
          font-size: 0.85em;
          font-family:simple;
        }

           

        
    
      </style>
    </head>

    <body>
      <nav class="blue-grey darken-4">
        <div class="nav-wrapper container">
           <a href="#" class="brand-logo main">Learn-It</a>
           <ul class="right hide-on-med-and-down nav-el">
            <li><a href="">About</a></li>
            <li><a href="login.html">Log In</a></li>
            <li><a href="signup.html">Sign Up</a></li>
           </ul>
          
        </div>
      </nav>
      
       
        <div class="bg">
          <img align = "middle" class="jumbo" src="image/img_21.png" alt="plane">
          <img class = "stars" src="image/stars.png">
          <p>Simple tool to boost your learning. </p>
          <a class="waves-effect waves-light btn-large">GET STARTED</a>
        </div>
        <div class="second">
          <div class="row">
            <div class="col s5">
              <img src="image/idea.jpg" class="idea">
            </div>
            <div class="col s7 text">
              <div class="text2">
                <p class = "thick">The best new way to learn. Anything.</p>
                <p>Learning with Learn-It is fun and addictive. With flashcards, revision speed is increased, therefore more efficiency and less hardwork. Our test and challenges are intuitive and proven to be effective.</p>
              </div>
            </div>
          </div>
        </div>

        <div>
          <p class="text subhead" align="middle">Gamification poured in every lesson.</p>
        </div>

        <br>
        
        <div class="third">
          <div class="row">
            <div class="col s4 text fit">
              <div class="text2">
              <p>One word : Flashcards. Tapping on flashcards gives you the detailed description, therefore helping you quickly revise for the challenges, tests and games ahead.</p>
              </div>
          
            </div>
            <div class = "col s4">
            
              <img alig = "middle" src="image/game.png" class="game-img">
            
            </div>
            <div class="col s4 text fit ">
              <div class="text2">
              <p>Various challenges including listening the correct pronunciation and match the correct answer, and much more. All these games help in intuitive learning.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="fourth">
          <div class="row">
            <div class="col s7 text">    
            <div class="text2">  
              <p class="thick">Learn anytime, anwhere.</p>  
              <p>Make your breaks and commutes more productive with our Android application. Download it and see it for yourslef the new way of learning.</p>
            </div>
            </div>
            <div class="col s5">
               <img src="image/anywhere.png" class="learn-img">
            </div>
          </div>
        </div>

        <!--Footer-->
      <!--<div class="footer">
          <footer class="page-footer blue-grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey darken-4">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      </div>-->
      <div class="footer">
        <img class="footer-img" src="image/stars2.png">
        <p class="text3">Start learning now.</p>
        <a class="waves-effect waves-light btn getbtn">Get Started</a>
        <a href="login.html" class="mm1">Login</a>
        <a href="signup.html" class="mm2">Sign Up</a>
      </div>
            
      
       
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
    </body>
  </html>