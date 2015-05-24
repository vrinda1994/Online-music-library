<html>
<head>
<title>GaanaMasti.com</title>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<!-- Bootstrap -->
<link href="css1.css" rel="stylesheet" type="text/css">
<link href="css2.css" rel="stylesheet" type="text/css">
<link href="css3.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "gallery1.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "gallery2.jpg"
slideimages[2] = new Image()
slideimages[2].src = "gallery3.jpg"
slideimages[3] = new Image()
slideimages[3].src = "gallery7.jpg"
slideimages[4] = new Image()
slideimages[4].src = "gallery9.jpg"

</script>
</head>
<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: main.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>
   
<body>
<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="new1.html">GaanaMasti<span>.com</span></a></h1>
		Hello  <?php echo $_SESSION['user']; ?>  ! You are just one click away from your favourite songs  
        <!--a href="#" onClick="javascript.void()" class="submenu">Menus</a--> </div>
      <div class="menuBar">
        <ul class="menu">
          <li class="active"><a href="mysongs1.php">Home</a></li>
          <!--li class="dropdown"><a href="#">MySongs</a>
            <ul>
              <li><a href="#">Bollywood</a></li>
              <li><a href="#">Hollywood</a></li>
              <li><a href="#">Rock</a></li>
              <li><a href="#">HipHop</a></li>
              <li><a href="#">Retro</a></li>
            </ul>
          </li-->
          <li><a href="bwood.php">Bollywood</a></li>
		  <li><a href="hwood.php">Hollywood</a></li>
		  <li><a href="rock.php">Rock</a></li>
		  <li><a href="hiphop.php">HipHop</a></li>
		  <li><a href="pop.php">Pop</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>

<br><br>
<body>
<a href="javascript:slidelink()"><img src="gallery1.jpg" id="slide" width="1300" /></a>

<script type="text/javascript">

//variable that will increment through the images
var step=0
var whichimage = 0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 whichimage = step
 if (step<4)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}
function slidelink(){
 if (whichimage == 0)
  window.location = "#"
 
 else if (whichimage == 1)
  window.location = "#"
 else if (whichimage == 2)
  window.location = "#"
  else if (whichimage == 3)
  window.location = "#"
  else if (whichimage == 4)
  window.location = "#"
}

slideit()

</script>
</body>
</html>
