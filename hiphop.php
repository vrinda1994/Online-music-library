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

<br><br><br><br><br><br><br><br><br><br>
<strong>Click on the song title to listen! </strong>
<br> <br>
<table border= "4" cellpadding="2" cellspacing="1" width="60%">
<tr>
<th>Title
<th>Artist
<th>Length
</tr>
<?php
mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("songs") or die("Cannot connect to database");
$query = mysql_query("Select * from hiphop");

while($row = mysql_fetch_array($query))
{
	$link = $row['link'];
	$title=$row['title'];
	$artist=$row['artist'];
	$length=$row['length'];
	echo "<tr>"; 
	echo " <td> <a href=' ".$link." '>" .$title. " </td>" ;
	//echo "<td>" .$link. "</td>" ; 
	echo "<td>" .$artist. "</td>" ; 
	echo "<td>" .$length. "</td>" ;
	echo "</tr>";

	
/*      $sql="select c_name from client order by c_name asc limit 10";
          $sql1=mysql_query($sql);
          echo "<table border='1' align=center width=500 style='border-collapse: collapse;'>";
           echo "<tr height =10><td width=300 align=center><b>Client name</b></td><td colspan=2 align=center><b>Action</b></td></tr>";
          while($fet=mysql_fetch_assoc($sql1))
          {
           $id=$fet['c_id'];
           echo "<tr>";
           echo "<td align=center width=100>".$fet["c_name"]."</td>";
           echo "<td align=center width=100><a href='client_details.php?id=".$id."'>Edit</a></td><td><a href=''>Delete</a></td>";
           echo "</tr>";  
           echo "</table><br>";
          }*/


}

echo "</table>";






?>
</body>
</html>
