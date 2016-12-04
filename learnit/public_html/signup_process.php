<?php
include "init.php";

if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['user_name'])|| empty($_POST['password'])) {

  echo '<script language="javascript">';
  echo 'alert("One or more field left blank")';
  echo '</script>';
  header('Location: signup.php');
}
else {

	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$uname = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql_query = "insert into users values('$fname', '$lname', '$email', '$uname', '$password');";

	if(mysqli_query($conn, $sql_query)) {
		echo '<script language="javascript">';
		echo 'alert("Registered!")';
		echo '</script>';
    mysqli_query($conn, "CREATE TABLE `".$uname."` ( id int NOT NULL AUTO_INCREMENT, set_name VARCHAR(50), set_word VARCHAR(50), set_def VARCHAR(100), primary key(id,set_name))");

	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Error in database, cannot insert.")';
		echo '</script>';
    header('Location: signup.php');
	}
}

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Sign Up: Learn-It</title>
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

        body {
          background: url('image/stars.png');
        }

        .align img {
          margin-left: 125px;
          margin-top: 23px;
          width: 50px;
          height: 55px;
        }

        .align2 {
          

        }

        .align2 p {
          text-align: center;
        }

        .align2 img {
          margin-left: 288px;
        }

        .align2 a {
        	margin-left: 250px;
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

        .align9 {
          margin:30px;
        }

        .img_margin {
          margin-left: 150px;
        }    
        .input-field input[type=text]:focus + label {
          color: #fff;
        }  
        .input-field input[type=text]:focus {
           border-bottom: 1px solid #fff;
           box-shadow: 0 1px 0 0 #fff;
        }
      </style>
      </head>
        <body>
          <nav class="blue-grey darken-4">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="index.php">Home</a></li>
             </ul>
            </div>
          </nav>
          <div class="align6">
            <div class="row">
              <div class="col s10 align">
                <div class="card z-depth-3">
                  <div class="card-content black-text align2">
                    <span class="card-title text2"><img class="img_margin" src="image/logo_main.png">
                      <br><p class="orange-text text-darken-2">Learn-It</p>
                    </span>
                	<br>
                    <p class="text">Congratulations, you are now a member.</p>
                    <p class="text">Log in now to begin learning. </p>

                    <br>
                    <a href="login.php" class="waves-effect waves-light btn green darken-1"><i class="material-icons left">input</i>log in</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      </body> 
