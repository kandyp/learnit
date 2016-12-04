<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}

$table = $_SESSION['userName'];


$query="select t1.* from `".$table."` t1 left join `".$table."` t2 on t1.set_name = t2.set_name and t1.set_word > t2.set_word where t2.set_word is null";
$result = mysqli_query($conn, $query);
//$query = "SELECT * from `".$table."`";

//$result = mysqli_query($conn, $query)
//or die('Error querying database');



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
      <script src="speakClient.js" >
      </script>
      <link rel="stylesheet" href="css/icons.css"></style>
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
          margin-left: 450px;
          margin-top: 30px;
          margin-bottom: 30px;

        }
        .layout {
          width: 500px;
          height: 150px;
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
          background-color: #aed581;
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

      </style>
      </head>
        <body>
          <div id="audio"></div>
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


       




          <div>
            <div class="row">
              <div class="col s12 align">
                <div class="card z-depth-2">
                  <div class="card-content">
                    <span class="card-title">
                      <p class="left-align text teal-text teal-darken 4">Your sets at your fingertips. Manage them in an instant. </p>
                    </span>                    
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="result">
      <form name="form1" method="post" action="">
      <?php
      while ($row = mysqli_fetch_array($result)) {
        $query2 = "SELECT * FROM `".$table."` WHERE `set_name`='".$row['set_name']."';";
        $result2 = mysqli_query($conn, $query2);
        echo '<div id="heading">
              <p class="text white-text head">'.$row[1].'</p></div><br>';
        while($row2 = mysqli_fetch_array($result2)) {
        ?>
        <div class="card layout center-align">
                <div class="card-content waves-effect waves-block waves-light">
                  <span class="card-title activator grey-text text-darken-4 text"
                  ><?php echo $row2['set_word']; ?>
                  <i class="material-icons right">more_vert</i>
                </span>
                  <p>
                <input name="checkbox[]" type="checkbox" id="<?php echo $row2['id']; ?>" value="<?php echo $row2['id']; ?>">
                <label for="<?php echo $row2['id']; ?>"></label>
                <?php echo '<div class="speaker right" onclick="speak(`'.$row2['set_word'].'`)"> </div>' ?>
                  

              </p>
                
                

                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 text"><?php echo $row2['set_def']; ?>
                           <?php echo '<div class="speaker left" onclick="speak(`'.$row2['set_def'].'`)"> </div>' ?>
                    <i class="material-icons right">close</i>


                  </span>

                </div>
              </div>
      <?php
      }
      echo '<br><br>';
    }
 ?>
  <button class="btn waves-effect waves-light blue darken-4 text" type="submit" name="delete">Remove Selection</button>
    <?php

            // Check if delete button active, start this 

            if(isset($_POST['delete']))
            {
                $checkbox = $_POST['checkbox'];

            for($i=0;$i<count($checkbox);$i++){

            $del_id = $checkbox[$i];
            $sql = "DELETE FROM `".$table."` WHERE id='$del_id'";
            $result = mysqli_query($conn, $sql);
            }
            // if successful redirect to delete_multiple.php 
            if($result){
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=view.php\">";
            }
             }

            mysqli_close($conn);

            ?>

    </form>
</div>-->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>


      



