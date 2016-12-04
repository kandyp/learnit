<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}

$table = $_SESSION['userName'];
  $query="select t1.* from `".$table."` t1 left join `".$table."` t2 on t1.set_name = t2.set_name and t1.set_word > t2.set_word where t2.set_word is null";
      $result = mysqli_query($conn, $query);
      if (!$result) {
      die("Failed to retrieve from database: " . mysql_error());
      }
      else echo ' ';    
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Explore: Learn-It</title>
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

        #sets {
          margin: 20px;
        }
        #padding {
          margin: 12px;
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
          background-color: #aed581;
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
      </style>
      </head>
        <body>
          <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out</a></li>
             </ul>
            </div>
          </nav>
          <div >
            <div class="row">
              <div id="sets">
                <div class="card z-depth-2">
                  <div class="card-content">
                    <span class="card-title">
                      <p class="text left-align bold green-text text-darken-2">Explore</p>
                    </span>
                    <br>
                    <p class="text">Manage your sets and explore different sections to start getting the most out of learning.</p>
                    <p class="text"> Here are your created sets: </p>
                    <br>



                  </div>
              </div>
            </div>
        </div>
      </div>
      <div id="sets">
      <ul class="collapsible" data-collapsible="accordion">
      <?php
      //Step4
      while ($row = mysqli_fetch_array($result)) {
        $query2 = "SELECT count(*) FROM `".$table."` WHERE `set_name`='".$row[1]."';";
        $result2 = mysqli_query($conn, $query2);
        while($row2 = mysqli_fetch_array($result2)) {
        echo '<li>
            <div class="collapsible-header text"><i class="material-icons">filter_drama</i>'.$row[1].'</div>
            <div class="collapsible-body white text"><p><a href="view.php">'.$row2[0].' words and definitions. Manage them now.</p></a></div>
            </li>';
          }
      }
    ?>
  </ul>
</div>
<br>
      <div class="row">
        <div id="padding">
        <div class="col s4">
          <div class="card pink darken-1 z-depth-1">
            <div class="card-content white-text text">
              <span class="card-title bold">Revise</span>
              <br>
              <p>Start revising your sets and take mini tests for the challenges ahead. Get, Set, Go!</p>
            </div>
            <div class="card-action">
              <a href="revise.php" class="white-text text">Start now</a>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
        <div id="padding">
        <div class="col s4">
          <div class="card red darken-1 z-depth-1">
            <div class="card-content white-text text">
              <span class="card-title">The Dictator</span>
              <br>
              <p>Test your memory and get your pronunciations right in this challenge, make sure to listen carefully.</p>
            </div>
            <div class="card-action">
              <a class="white-text text" href="quiz.php">Listen now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="padding">
        <div class="col s4">
          <div class="card purple darken-1 z-depth-1">
            <div class="card-content white-text text">
              <span class="card-title">Play</span>
              <br>
              <p>Play interactive games like Scatter and Space-Race to test your knowledge, plus have some fun too!</p>
            </div>
            <div class="card-action ">
              <a href="gameselect.php" class="white-text text">Play now</a>
            </div>
          </div>
        </div>
      </div>
</div>
</body>
</html>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      </body> 


