 <!DOCTYPE html>
  <html>
    <head>
      <title>Home: Learn-It</title>
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/animate.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <nav class="blue-grey darken-4">
        <div class="nav-wrapper container">
           <a href="index.php" class="brand-logo main">Learn-It</a>
           <ul class="right hide-on-med-and-down nav-el">
            <li><a href="login.php">Log In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
           </ul>
        </div>
      </nav>
        <div class="bg">
          <img align = "middle" class="jumbo" src="image/img_21.png" alt="plane">
          <img class = "stars" src="image/stars.png">
          <p class="console"><span id="caption"></span><span id="cursor"></span></p>
          <a href="#about" class="text waves-effect waves-light btn-large pink darken-1">GET STARTED</a>
        </div>
        <div class="second" id="about">
          <div class="row">
            <div class="col s5">
              <img src="image/idea.jpg" class="idea">
            </div>
            <div class="col s7 text">
              <div class="text2" id="a">
                <p class = "thick">The best new way to learn. Anything.</p>
                <p>Learning with Learn-It is fun and addictive. With flashcards, revision speed is increased, therefore more efficiency and less hardwork. Our test and challenges are intuitive and proven to be effective.</p>
              </div>
            </div>
          </div>
        </div>
        <div id="b">
          <p class="text subhead" align="middle">Gamification poured in every lesson.</p>
        </div>
        <br>
        <div class="third">
          <div class="row">
            <div class="col s4 text fit">
              <div class="text2" id="c">
              <p>One word : Flashcards. Tapping on flashcards gives you the detailed description, therefore helping you quickly revise for the challenges, tests and games ahead.</p>
              </div>
          
            </div>
            <div class = "col s4">
              <img align = "middle" src="image/game.png" class="game-img">
            </div>
            <div class="col s4 text fit">
              <div class="text2" id="d">
              <p>Various challenges including listening the correct pronunciation and match the correct answer, and much more. All these games help in intuitive learning.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="fourth">
          <div class="row">
            <div class="col s7 text">    
            <div class="text2" id="e">  
              <p class="thick">Learn anytime, anwhere.</p>  
              <p>Make your breaks and commutes more productive with our Android application. Download it and see it for yourslef the new way of learning.</p>
            </div>
            </div>
            <div class="col s5">
               <img src="image/anywhere.png" class="learn-img">
            </div>
          </div>
        </div>
 
      <div class="footer">
        <img class="footer-img" src="image/stars2.png">
        <p class="text3">Start learning now.</p>
        <a href="login.php" class="mm1">Login</a>
        <a href="signup.php" class="mm2">Sign Up</a>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">  
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(window).scroll(function() {
          $('#a').each(function(){
          var imagePos = $(this).offset().top;

          var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+600) {
              $(this).addClass("animated fadeIn");
            }
          });
        });
        $(window).scroll(function() {
          $('#b').each(function(){
          var imagePos = $(this).offset().top;

          var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+700) {
              $(this).addClass("animated pulse");
            }
          });
        });
        $(window).scroll(function() {
          $('#c').each(function(){
          var imagePos = $(this).offset().top;

          var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+600) {
              $(this).addClass("animated fadeIn");
            }
          });
        });
        $(window).scroll(function() {
          $('#d').each(function(){
          var imagePos = $(this).offset().top;

          var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+600) {
              $(this).addClass("animated fadeIn");
            }
          });
        });
        $(window).scroll(function() {
          $('#e').each(function(){
          var imagePos = $(this).offset().top;

          var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+600) {
              $(this).addClass("animated fadeInUp");
            }
          });
        });

       var captionLength = 0;
var caption = '';


$(document).ready(function() {
    setInterval ('cursorAnimation()', 600);
    captionEl = $('#caption');
        testTypingEffect();
});

function testTypingEffect() {
    caption
      = "Simple tool to boost your learning."
    type();
}

function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
        setTimeout('type()', 80);
    } else {
        captionLength = 0;
        caption = '';
    }
}
function cursorAnimation() {
    $('#cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}
      </script>
    </body>
  </html>