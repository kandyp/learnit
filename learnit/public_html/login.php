<!DOCTYPE html>
  <html>
    <head>
      <title>LogIn: Learn-It</title>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="login.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      </head>
        <body class="text">
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
                      <br><p class="orange-text text-darken-3 bold">Learn-It</p>
                    </span>
                
                    <p class="text">Log in now to get the most out of Learn-It.</p>
                  </div>
                  <form name="loginform" action="loginprocess.php" method="post" class ="align9" onsubmit="return validateForm()" >
                    <div class="row">
                      <div class="input-field col s12 green-text text-lighten-3">
                        <input name="user_name" type="text" class="validate black-text">
                        <label for="user_name">Username</label>
                        
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="input-field col s12 green-text text-lighten-3">
                        <input name="password" type="password" class="validate black-text">
                        <label class="" for="password">Password</label>
                        <p class="text red-text text-lighten-1" id="pval"></p>
                      </div>
                    </div>
                  
                    <br>
                    <p class="align12 text">
                      <input type="checkbox" id="test5" />
                      <label class="black-text" for="test5">Keep me logged in</label>
                    </p>
                    <br>
                    <div class="align2">
                    <p class="text">Still not a member? <a href="signup.php" class="green-text text-darken-2">SIGN UP.</a> It's free.</p>
                    </div>


                    <br>
                    <br>
                    <button class="btn waves-effect waves-light align4 orange darken-4" type="submit" name="action">Sign In
                      
                    </button>
                  </form>
               
              </div>
            </div>
        </div>
      </div>

       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        function validateForm() {
        var x = document.forms["loginform"]["user_name"].value;
        var y = document.forms["loginform"]["password"].value;
        if (x == null || x == "" || y == "" || y == null ) {
          document.getElementById("pval").innerHTML = "*One or more fields were left blank, please fill the form correctly.";
          return false;
        }
        
          
        }
      </script>
    </body> 
