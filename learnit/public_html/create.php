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
      <title>Create: Learn-It</title>
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

        #fixed {
          position: fixed;
          bottom: 0px;
          left: 0px;
          margin: 30px;
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


        body {
          background-color: #81d4fa;
        }

        .align {
          margin: 20px;
        }

        .btn-1 {
          margin-left: 300px;
        }

        .btn-2 {
          margin-left: 350px;
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

        .bottom {
          margin-bottom: 20px;
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
        .padding {
          padding: 15px;
        }

      </style>
      </head>
        <body>
          <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out </a></li>
             </ul>
            </div>
          </nav>
          <div class="padding">
            <div class="row">
              <div class="align">
                <div class="card z-depth-2">
                  <div class="padding">
                  <div class="card-content">
                    <span class="card-title text teal-text teal-darken 4">
                      <p class="left-align">Set Details</p>
                    </span>                    
                    <p class="text">Start creating your set for subject of your choice.</p>
                    <br>
                    <br>
                    <form action ="database.php" method="post">
                    
                    <div class="row">
                      <div class="input-field col s4 text green-text text-lighten-3">
                        
                        <input name="set_name" type="text" class=" text validate">
                        <label for="set_name">Set Name</label>
                      
                      </div>
                    </div>
                    
                    <div class="details">
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    <button class="btn waves-effect waves-light orange darken-4 text" type="submit" id="" name="action">Save
                    </button>

                    <div class="right bottom">
                    <a class="btn-floating btn-large waves-effect waves-light pink add_field_button"><i class="material-icons">add</i></a>  
                    </div>
                  </form>
              </div>
            </div>
            </div>  
        </div>
      </div>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        
      $(document).ready(function() {
          var max_fields      = 10; //maximum input boxes allowed
          var wrapper         = $(".details"); //Fields wrapper
          var add_button      = $(".add_field_button"); //Add button ID
          
          var x = 1; //initlal text box count
          $(add_button).click(function(e){ //on add input button click
              e.preventDefault();
              if(x < max_fields){ //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div class="row"><div class="input-field col s6 green-text text-lighten-3 text"><input name="word[]" type="text" class="validate"><label for="word[]">Word</label></div><div class="input-field col s6 green-text text-lighten-3 text"><input name="def[]" type="text" class="validate"><label for="def">Definition</label></div><a class="btn waves-effect waves-light blue-grey darken-4 remove_field"><i class="material-icons">delete</i></a>  </div>'); //add input box
              }
          });
          
          $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
              e.preventDefault(); $(this).parent('div').remove(); x--;
          })
      });
      </script>
      </body> 
