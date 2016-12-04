<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}


$table = $_SESSION['userName'];
$query="SELECT * FROM spanish";
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
      <title>Create: Learn-It</title>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/animate.min.css" />
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
        .question {
          text-decoration: underline;
          font-weight: bold;
        }
        #success {
           -webkit-animation-duration: 0.5s;
           -webkit-animation-delay: 0;
           -webkit-animation-iteration-count: 1;
        }

        #fail {
           -webkit-animation-duration: 0.5s;
           -webkit-animation-delay: 0;
           -webkit-animation-iteration-count: 1;
        }

        #input {
           -webkit-animation-duration: 0.5s;
           -webkit-animation-delay: 0;
           -webkit-animation-iteration-count: 1;
        }
        .alignment {
          margin-left: 20px;
          padding-left: 10px;
        }
      </style>
      </head>
        <body onload="randomize()">
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
                      <p class="left-align">Let's begin.</p>
                    </span>                    
                    <p class="text">Write the correct word for the correct definition in the blank space provided.</p>
                    <br>
                    <br>
                    <div class="row">
                      <div class="padding">
                        <div class="col s6">
                          <span class="text question">Question :</span>
                        </div>
                        <div class="col s6">
                          <p class="text alignment" id="question"></p>
                        </div>
                      </div>
                      <div class="padding">
                        <div class="col s6 text"><br>Answer : </div>
                        <div class="col s6">
                        <div id ="input" class="input-field col s5 text grey-text text-darken-4 center-align">
                        
                        <input name="answer" id="answer" type="text" class="text validate">
                        <label for="answer">Your Answer</label>
                      </div>
                      </div>
                    </div>
                  </div>
                    <div class="padding text">
                      <p class="green-text green-darken-3 text" id="success"></p>
                    </div>
                    <div class="padding text">
                      <p class="red-text red-darken-1 text" id="fail"></p>
                      </div>
                    <div class="details">
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <br>

          <?php
          while($row = mysqli_fetch_array($result)) { 
              $arrword[] = $row['word']; 
              $arrdef[] = $row['definition'];
              $word = implode( ',' , $arrword );
              $def = implode( ',' , $arrdef );
              
              }   
          ?>
                    <button onclick="extract()" class="btn waves-effect waves-light orange darken-4 text">check
                    </button>
                    <div class="right bottom">
                    <button onclick="randomize()" class="btn-floating btn-large waves-effect waves-light pink add_field_button"><i class="material-icons">fast_forward</i></a>  
                    </div>

                    
              </div>
            </div>
            </div>  
        </div>
      </div>
      
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      var word = "<?php echo $word; ?>";
      var def = "<?php echo $def; ?>";
      var finalword = word.split(",");
      var finaldef = def.split(",");
      function randomize() {
        document.getElementById("answer").value = "";
        document.getElementById("success").innerHTML = "";

        document.getElementById("fail").innerHTML = "";
        var random = finalword[Math.floor(Math.random()*finalword.length)];
        document.getElementById("question").innerHTML = random;
        for(var i=0;i<=finalword.length;i++) {
        if(finalword[i]==random) {
          console.log(i);
          var randomdef = i;
          answerdef = finaldef[randomdef];
          console.log(answerdef);
   
        }
        }
      
        
      }
      
      function extract(a) {
       
        var answer = document.getElementById("answer").value;
        console.log(answer);
        if(answerdef == answer) {
        var right = document.getElementById("success");
        document.getElementById("fail").innerHTML = "";
        right.innerHTML = "Whoopie, correct answer, let's move onto the next question.";
        right.className = right.className + "animated infinite pulse";
        }
        else {
          var wrong = document.getElementById("fail");
          var input = document.getElementById("input");
          input.className = input.className + "animated infinite shake";
          wrong.innerHTML = "Oopsie, hold your horses. The answer is incorrect.";
          wrong.className = wrong.className + "animated infinite pulse";
        }
      }
      
      </script>
      </body> 
