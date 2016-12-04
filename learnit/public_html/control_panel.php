<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}
$uname = $_SESSION['userName'];
$sql_query = "SELECT * FROM `users` WHERE `UserName`='".$uname."';";
$result = mysqli_query($conn, $sql_query);
if(!$result) {
	echo "<script>";
	echo "alert('Failed to retrieve');";
	echo "</script>";
}

while($row = mysqli_fetch_array($result)){
	$fname = $row['FirstName'];
	$lname = $row['LastName'];
	$email = $row['Email'];
	$user_name = $row['UserName'];
	$pass = $row['Password'];
}

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Account Manager: Learn-It</title>
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
        .bold {
          font-size: 1.3em;
          font-weight: bolder;
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
        .user_details {
        	margin: 15px;
        }

        .align3 {
          margin-left: 145px;
          margin-bottom: 40px;
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
        .pad {
        	margin: 15px;
        }
      </style>
      </head>
        <body>
          <nav class="blue-grey darken-4">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out </a></li>
             </ul>
            </div>
          </nav>
          <div class="align6">
            <div class="row">
              <div class="col s10 align">
                <div class="card z-depth-3">
                  <div class="card-content white-text align2">
                    <span class="card-title text2"><img class="img_margin" src="image/logo_main.png">
                      <br><p class="orange-text text-darken-2 bold">Learn-It</p>
                    </span>
                
                    <p class="text black-text">Only you are the incharge of your account. Manage it in an instant.</p>
                  </div>
                  
                  <form action="save_details.php" method="post">
                    <br>
                    <br>
                    <div class="user_details">
                   <ul class="collapsible popout text z-depth-3" data-collapsible="accordion">
      				      <li>
      				      <div class="collapsible-header"><i class="material-icons">stars</i>First Name</div>
      				      <div class="collapsible-body white">
      				      	<p><?php echo $fname; ?></p>
      				      	<div class="input-field pad">
                              	<input name="new_fname" type="text" class="validate">
                              	<label for="new_fname">New First Name</label>
                            	</div>

      				      </div>
      				      </li>
      				      <li>
      				      <div class="collapsible-header"><i class="material-icons">stars</i>Last Name</div>
      				      <div class="collapsible-body white">
      				      	<p><?php echo $lname; ?></p>
      				      		<div class="input-field pad">
                              	<input name="new_lname" type="text" class="validate">
                              	<label for="new_lname">New Last Name</label>
                        </div>
      				      </div>
      				      </li>
      				      <li>
      				      <div class="collapsible-header"><i class="material-icons">stars</i>User Name</div>
      				      <div class="collapsible-body white"><p><?php echo $user_name; ?></p></div>
      				      </li>
      				      <li>
      				      <div class="collapsible-header"><i class="material-icons">stars</i>Password</div>
      				      <div class="collapsible-body white">
      				      	<p><?php echo $pass; ?></p>
      				      		<div class="input-field pad">
                              	<input name="new_pass" type="password" class="validate">
                              	<label for="new_pass">New Password</label>
                            	</div>
                            		<div class="input-field pad">
                              	<input name="new_pass2" type="password" class="validate">
                              	<label for="new_pass2">Confirm Password</label>
                            	</div>
      				      </div>
      				      </li>
      				      <li>
				      <div class="collapsible-header"><i class="material-icons">stars</i>Email Address</div>
				      <div class="collapsible-body white"><p><?php echo $email; ?></p>
              <div class="input-field pad">
              <input name="new_email" type="email" class="validate">
              <label for="new_email">New Email Address</label>
              </div>
              </div>
				    </li>
				  </ul>
				</div>
				<div class="pad">
				<button class="text btn waves-effect waves-light align4 orange darken-4" type="submit" name="action">Save details</button>
			</div>
				</form>
              </div>
            </div>
        </div>
      </div>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body> 
