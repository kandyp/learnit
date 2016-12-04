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
echo "<script>";
echo "alert('Database query failed');"; 
echo "</script>";
}
else echo ' ';
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Your sets: Learn-It</title>
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

        .result {
          margin: 45px;

        }
        .layout {
          width: 430px;
          height: 490px;
          margin-left: 100px;

        }
        .text {
          font-family: google;
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

        

        .text2 {
          font-family: cheddar;

        }
        .text3 {
          font-family: stilu;
        }
        .head {
          font-size: 1.1em;
        }

        body {
          background-color: #c8e6c9;
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
        
        .bold {
          font-weight: bolder;
        }
        .size {
          width: 360px;
          height: 340px;
          margin: 10px;
          padding: 10px;

        }
        .card-size {
          width: 450px;
          height: 100px;
          margin-left: 100px;
        }
        .pad {
          padding: 5px 20px 5px 25px;
        }
      </style>
      </head>
        <body>
          <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="explore.php">Explore</a></li>
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out </a></li>
             </ul>
            </div>
          </nav>
  <div class="row result">
    <div class="col s6">
      <div class="card z-depth-1 layout green lighten-2">
            <div class="card-content white-text text padding">
              
              <span class="card-title pad">Revise Now</span>

              
              <p class="pad">Start revising your sets for the challenges ahead. Select a set which you want to revise.</p>
              <img class="size" src="image/revise.jpg" />
            </div>
          </div>
    </div>
    <div class="col s6">
          <div>
          <?php
          while($row = mysqli_fetch_array($result)) {
              $arrno1[] = $row['id']; 
              $arrname[] = $row['set_name']; 
              $arrword[] = $row['set_word']; 
              $arrdef[] = $row['set_def'];
              $id = implode( ',' , $arrno1 ); 
              $name = implode( ',' , $arrname );
              $word = implode( ',' , $arrword );
              $def = implode( ',' , $arrdef );   
          ?>
          <div class="card card-size z-depth-1 center-align">
                <div class="card-content waves-effect waves-block waves-light white-text">
                  <span class="card-title activator grey-text text-darken-4 text"
                  ><?php echo '<a href="viewset.php?id=' . $row['set_name'] . '">' . $row['set_name'] . '</a>'; ?>  
                </div>
                
              </div>

              <?php
            }
            ?>
          </div>  
        </div>
        </div>
                

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script type="text/javascript">
      var name = "<?php echo $name; ?>";
      var word = "<?php echo $word; ?>";
      var def = "<?php echo $def; ?>";
      var finalname = name.split(",");
      var finalword = word.split(",");
      var finaldef = def.split(",");

      var container = document.getElementById("div1");
      </script>
</body>
</html>


      



