<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}
$table = $_SESSION['userName'];
$query = "SELECT * FROM `ayushsharma` WHERE 'set_name'='English';";
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
<!doctype html>
<html lang="en">
<head>
 
<title>Grid Matching</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<style type="text/css">
  
body {
  margin: 30px;
  font-family: google;
  line-height: 1.8em;
  color: #333;
}
 
/* Give headings their own font */
 @font-face {
          font-family: google;
          src: url('font/google.ttf');
        }

h1, h2, h3, h4 {
  font-family: google;
}
 
/* Main content area */
 
#content {
  margin: 80px 70px;
  text-align: center;
  -webkit-user-select: none;
  user-select: none;
}
 
/* Header/footer boxes */
 
.wideBox {
  clear: both;
  text-align: center;
  margin: 70px;
  padding: 10px;
  background: #ebedf2;
  border: 1px solid #333;
}
 
.wideBox h1 {
  font-weight: bold;
  margin: 20px;
  color: #666;
  font-size: 1.5em;
}
 
/* Slots for final card positions */
 
#cardSlots {
  margin: 50px auto 0 auto;
  background: #ddf;
}
 
/* The initial pile of unsorted cards */
 
#cardPile {
  margin: 0 auto;
  background: #ffd;
}
 
#cardSlots, #cardPile {
  width: 1110px;
  height: 120px;
  padding: 20px;
  border: 2px solid #333;
 
  -webkit-border-radius: 10px;
  border-radius: 10px;
  
  -webkit-box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
}
 
/* Individual cards and slots */
 
#cardSlots div, #cardPile div {
  float: left;
  width: 78px;
  height: 78px;
  padding: 10px;
  padding-top: 40px;
  padding-bottom: 0;
  border: 2px solid #333;
  
  -webkit-border-radius: 10px;
  border-radius: 10px;
  margin: 0 0 0 10px;
  background: #fff;
}
 
#cardSlots div:first-child, #cardPile div:first-child {
  margin-left: 0;
}
 
#cardSlots div.hovered {
  background: #aaa;
}
 
#cardSlots div {
  border-style: dashed;
}
 
#cardPile div {
  background: #666;
  color: #fff;
  font-size: 50px;
  text-shadow: 0 0 3px #000;
}
 
#cardPile div.ui-draggable-dragging {
  
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}
 
/* Individually coloured cards */
 
#card1.correct { background: red; }
#card2.correct { background: brown; }
#card3.correct { background: orange; }
#card4.correct { background: yellow; }
#card5.correct { background: green; }
#card6.correct { background: cyan; }
#card7.correct { background: blue; }
#card8.correct { background: indigo; }
#card9.correct { background: purple; }
#card10.correct { background: violet; }
 
 
/* "You did it!" message */
#successMessage {
  position: absolute;
  left: 580px;
  top: 250px;
  width: 0;
  height: 0;
  z-index: 100;
  background: #dfd;
  border: 2px solid #333;
  
  -webkit-border-radius: 10px;
  border-radius: 10px;
  
  -webkit-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  padding: 20px;
}
</style> 
<script type="text/javascript">

  var startwords =  "<?php echo $word; ?>"; 
// JavaScript will go here
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
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
 
  // Create the pile of shuffled cards

  var numbers = startwords.split(",");
  console.log(numbers);

 
  for ( var i=0; i<10; i++ ) {
    $('<div>' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i] ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }
 
  // Create the card slots
  var words = [ 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten' ];
  for ( var i=1; i<=10; i++ ) {
    $('<div>' + words[i-1] + '</div>').data( 'number', i ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }
 
}
function handleCardDrop( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
 
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again
 
  if ( slotNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctCards++;
  } 
   
  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go
 
  if ( correctCards == 10 ) {
    $('#successMessage').show();
    $('#successMessage').animate( {
      left: '380px',
      top: '200px',
      width: '400px',
      height: '100px',
      opacity: 1
    } );
  }
 
}

</script>
 
</head>
<body>
 
<div id="content">
 
  <div id="cardPile"> </div>
  <div id="cardSlots"> </div>
 
  <div id="successMessage">
    <h2>You did it!</h2>
    <button onclick="init()">Play Again</button>
  </div>
 
</div>

</body>
</html>