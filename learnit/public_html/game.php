<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}
$table = $_SESSION['userName'];
$setname = $_GET['id'];
$query = "SELECT * FROM `".$table."` WHERE set_name='$setname';";

$result = mysqli_query($conn, $query);
if (!$result) {
echo "<script>";
echo "alert('Database query failed');"; 
echo "</script>";
}
else echo ' ';

  while($row = mysqli_fetch_array($result)) { 
              $arrword[] = $row['set_word']; 
              $arrdef[] = $row['set_def'];
              $word = implode( ',' , $arrword );
              $def = implode( ',' , $arrdef ); 
            }

?>

<!DOCTYPE html>
  <html lang="en">
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
          background-color: #bdbdbd ;
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
       
      
        #content {
          width: 1100px;
          height: 500px;
          margin-left: 120px;
          margin-top: 40px;
          margin-bottom: 20px;
          text-align: center;
        }

        #defPile {
          width: 1070px;
          height: 200px;
          padding: 20px;
          border: 2px dotted white;  
          margin: 20px;
          border-radius: 5px;
         }
         #wordPile {
          width: 1070px;
          height: 150px;
          padding: 20px;
          border: 1px dotted white;  
          margin: 20px;
          border-radius: 5px;
         }
         #defPile div {
            float: left;
            width: 160px;
            height: 140px;
            padding: 10px;
            padding-top: 40px;
            padding-bottom: 0;
            border-radius: 10px;
            margin: 0 0 0 10px;
            background: #636161 ;

          }
          #wordPile div {
            float: left;
            width: 160px;
            height: 100px;
            padding: 10px;
            padding-top: 40px;
            padding-bottom: 0;
            border-radius: 10px;
            margin: 0 0 0 10px;
            background: #EBEBEB;
          }
          #successMessage {
            position: absolute;
            left: 580px;
            top: 250px;
            width: 0;
            height: 0;
            z-index: 100;
            background: #dfd;
            border-radius: 8px;
            box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
            padding: 20px;
          }

.small {
  font-size:0.8em;
}
      </style>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script type="text/javascript">
var correctCards = 0;
$( init );  
function init() {
 
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );
 
  // Reset the game
  correctCards = 0;
  $('#wordPile').html( '' );
  $('#defPile').html( '' );
 
  //shuffle
  function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
  } 
  //words
  var x = "<?php echo $word; ?>";
  words = x.split(",");
  initwords = x.split(",");
  words.sort(function() { return 0.5 - Math.random();});
  

  for (var i=0; i<words.length; i++ ) {
    //console.log(initwords[i]);
    //console.log(words[i]);  

    $('<div class="padding word z-depth-2 left">' + words[i] + '</div>').data( 'word', i ).attr( 'id', 'card'+i ).appendTo( '#wordPile' ).draggable( {
      stack: '#wordPile div', 
      cursor: 'move',
      revert: true
    } );
  }

  //definition 
  var initdef = "<?php echo $def ?>";
  def = initdef.split(",");

  
  console.log(def);
  for (var i=0; i<def.length; i++ ) {
    $('<div class="definition padding z-depth-2 left">' + def[i] + '</div>').data( 'word', i ).appendTo( '#defPile' ).droppable( {
      accept: '#wordPile div',
      hoverClass: 'hovered',

      drop: handleCardDrop  
    } );
  }
 

}
function handleCardDrop( event, ui ) {

  var defNumber = $(this).data( 'word' );
  var defs = $(this).html();
  
  var wordNumber = ui.draggable.data('word');
  var word = ui.draggable.html();
  


  for(var i=0;i<initwords.length;i++) {
    for(j=0;j<def.length; j++) {
      if(word == initwords[i] && defs == def[j]) {
        console.log(i);
        console.log(j);
        if(i == j) {
          console.log("Success");
          ui.draggable.addClass( 'correct' );
          ui.draggable.draggable( 'disable' );
          $(this).droppable( 'disable' );
          ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
          ui.draggable.draggable( 'option', 'revert', false );
          correctCards++;
        }

  }
}
}
 
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again

 
  
   
  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go
 
  if (correctCards ==  words.length ) {
    stop();

    $('#successMessage').show();
    $('#successMessage').animate( {
      left: '480px',
      top: '200px',
      width: '400px',
      height: '200px',
      opacity: 1
    } );
    reset();
  }
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again
 
 
}



var clsStopwatch = function() {
    // Private vars
    var startAt = 0;  // Time of last start / resume. (0 if not running)
    var lapTime = 0;  // Time on the clock when last stopped in milliseconds

    var now = function() {
        return (new Date()).getTime(); 
      }; 
 
    // Public methods
    // Start or resume
    this.start = function() {
        startAt = startAt ? startAt : now();
      };

    // Stop or pause
    this.stop = function() {
        // If running, update elapsed time otherwise keep it
        lapTime = startAt ? lapTime + now() - startAt : lapTime;
        startAt = 0; // Paused
      };

    // Reset
    this.reset = function() {
        lapTime = startAt = 0;
      };

    // Duration
    this.time = function() {
        return lapTime + (startAt ? now() - startAt : 0); 
      };
  };

var x = new clsStopwatch();
var $time;
var clocktimer;

function pad(num, size) {
  var s = "0000" + num;
  return s.substr(s.length - size);
}

function formatTime(time) {
  var h = m = s = ms = 0;
  var newTime = '';

  h = Math.floor( time / (60 * 60 * 1000) );
  time = time % (60 * 60 * 1000);
  m = Math.floor( time / (60 * 1000) );
  time = time % (60 * 1000);
  s = Math.floor( time / 1000 );
  ms = time % 1000;

  newTime = pad(h, 2) + ':' + pad(m, 2) + ':' + pad(s, 2) + ':' + pad(ms, 3);
  return newTime;
}

function show() {
  $time = document.getElementById('time');
  update();
}

function update() {
  $time.innerHTML = formatTime(x.time());
}

function start() {
  clocktimer = setInterval("update()", 1);
  x.start();
}

function stop() {
  x.stop();
  clearInterval(clocktimer);
}

function reset() {
  stop();
  x.reset();
  update();
}
</script>
 

      </head>
        <body onload="show();">
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
           <div class="row">
              <div class="col s12 align">
                <div class="card z-depth-2">
                  <div class="card-content">
                    <span class="card-title">
                      <p class="text black-text small">Do you dare to take the quiz? Challenge yourself now. </p>
                    </span>                    
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="text white-text center-align">Your Time: <span id="time"></span><br><button class="btn grey darken-3" onclick="start();">Start</button></div>
        <div id="content" class="text">
         
          <div id="wordPile"> </div>
          <div id="defPile" class="white-text"> </div>
 
          <div id="successMessage">
            <h3>You did it!</h3>
            
            <button class="btn grey darken-3" onclick="init()">Play Again</button>
        </div>
       
</div>
    
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      </script>
      </body> 
