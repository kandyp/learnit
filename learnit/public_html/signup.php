<!DOCTYPE html>
  <html>
    <head>
      <title>Sign Up: Learn-It</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="login.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      </head>
      <body>
          <nav class="blue-grey darken-4">
            <div class="nav-wrapper container">
             <a href="index.html" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="index.php">Home</a></li>
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
                
                    <p class="text black-text">Register now. It's easy.</p>
                  </div>
                  <form name="signupform" action="signup_process.php" method="post" class ="align9 text" onsubmit="return validateForm()">
                    <div class="row">
                      <div class="input-field col s6 green-text text-darken-3">

                        <input name="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                      </div>
                      <div class="input-field col s6 green-text text-darken-3">
                        <input name="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 green-text text-darken-3">
                        <input name="user_name" type="text" class="validate">
                        <label for="user_name">Username</label>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="input-field col s12 green-text text-darken-3">
                        <input name="password" type="password" class="validate">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 green-text text-darken-3">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <p class="text red-text text-darken-2" id="val"></p>
                      </div>
                    </div>
                    <br>
                    <p>
                      <input type="checkbox" id="test5" />
                      <label class="black-text text" for="test5">Yes, I wish to recieve all the latest news and updates about Learn-It.</label>
                    </p>
                    <br>
                    <br>
                    <button class="btn waves-effect waves-light align4 deep-orange darken-4" type="submit" name="action">Sign Up
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
        var a = document.forms["signupform"]["first_name"].value;
        var b = document.forms["signupform"]["last_name"].value;
        var c = document.forms["signupform"]["user_name"].value;
        var d = document.forms["signupform"]["password"].value;
        var e = document.forms["signupform"]["email"].value;
        if (a == null || a == "" || b == "" || b == null || c == "" || c == null || d == "" || d == null || e == "" || e == null ) {
          document.getElementById("val").innerHTML = "*One or more fields were left blank, please fill the form correctly.";
          return false;
        }
        
          
        }
      </script>
    </body>
</html>


