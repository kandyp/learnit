<?php
session_start();
include "init.php";
if (!isset($_SESSION['userName'])) {
header('Location: index.php');
}

$table = $_SESSION['userName'];

$query1="SELECT * FROM `french`";
$result1 = mysqli_query($conn, $query1);
$count = mysqli_num_rows($result1);

$u = $count/20;
$u = ceil($u);

$page = (isset($_GET['page'])) ? $_GET['page'] : 0;
if($page=="" || $page=="1") {
  $page1 = 0;
}
else {
  $page1=($page*20)-20;
}

$query="SELECT * FROM `french` LIMIT $page1,20";
$result = mysqli_query($conn, $query);

if (!$result) {
echo "<script>";
echo "alert('Database query failed');"; 
echo "</script>";
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Revise: Learn-It</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/flick.css">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
      	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <style type="text/css">
 
        	* {
				  -webkit-box-sizing: border-box;
				  box-sizing: border-box;
				}

				body { font-family: sans-serif;

				  background: #AFAFAF;

				 }
				    @font-face {
          font-family: simple;
          src: url('font/simple.ttf');
        }

        @font-face {
          font-family: cheddar;
          src: url('font/cheddar.ttf');
        }

        		 @font-face {
          font-family: google;
          src: url('font/google.ttf');
        }

         .heading {
          width: 55px;
          height: 20px;
          padding: 20px;
          text-align: left;

        }
        .styling {
          padding: 5px;
          margin: 10px;
          color: #020110;
          font-size: 0.9em;
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



				

				.gallery-cell {
				  width: 500px;
				  height: 400px;
				  margin-right: 10px;
				  color: white;
				  text-align: center;
				}

				/* cell number */
				.gallery-cell:before {
				  display: block;
				  text-align: center;
				  line-height: 200px;
				  font-size: 80px;
				  color: white;
				}

				.layout {
					margin: 20px;
				}

				.card-size {
					width: 400px;
					height: 250px;
				}

        .flickity-page-dots {
  bottom: -22px;
}
/* dots are lines */
.flickity-page-dots .dot {
  height: 4px;
  width: 40px;
  margin: 0;
  border-radius: 0;
}
.pagination {
  text-align: center;
  margin-top: 20px;
  margin-right: 10px;
  margin-left: 10px;
  padding-top: 20px;
  padding-left:10px;
  padding-right:10px; 

}
        </style>
    </head>
    <body>
    	 <nav class="blue-grey darken-2">
            <div class="nav-wrapper container">
             <a href="index.php" class="brand-logo main">Learn-It</a>
             <ul class="right hide-on-med-and-down nav-el">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="browse.php">Browse</a></li>
              <li><a href="control_panel.php"><?php echo $_SESSION['userName'] ; ?></a></li>
              <li><a href="logout.php">Log Out </a></li>
             </ul>
            </div>
          </nav>

          <div id="one">
    	<div class="gallery js-flickity text layout">
		  	<?php 
		  	
        	
		  	while($row = mysqli_fetch_array($result)) {
        ?>

        <div class="gallery-cell">
        	<div class="card layout card-size">
                <div class="card-content waves-effect waves-block waves-light">
                  <span class="card-title activator grey-text text-darken-4 text"
                  ><?php echo $row['word']; ?><i class="material-icons right">more_vert</i></span>
                  
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4 text"><?php echo $row['definition']; ?><i class="material-icons right">close</i></span>
                </div>
            </div>
        </div>
      <?php
      }
    
      ?>
		  
		 
		</div>
  </div>

  <div class="pagination text">
    <ul class="pagination">
<?php 

for($b=1;$b<=$u;$b++){
  ?><li class="waves-effect"><a class="text styling" href="french.php?page=<?php echo $b." "  ; ?>"><?php echo $b;?></a></li><?php
}

?>
</ul>
</div>

 
        
   <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue-grey darken-4">
      <i class="large material-icons">toc</i>
    </a>
    <ul>
      <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Take the Quiz"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Take the Game Challenge"><i class="material-icons">games</i></a></li>
      <li><a href="explore.php" class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Revise your other Sets"><i class="material-icons">dashboard</i></a></li>
      
    </ul>
  </div>
		<script src="js/vendor/jquery-1.11.1.min.js"></script>
  		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="js/flickity.js"></script>
		<script type="text/javascript">


		</script>

	</body>
</html>