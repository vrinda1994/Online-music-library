<html>
    <head>
        <title></title>
<style>
	div.img {
    margin: 5px;
    padding: 5px;
    border: 1px solid #0000ff;
    height: auto;
    width: auto;
    float: left;
    text-align: center;
}	

div.img img {
    display: inline;
    margin: 5px;
    border: 1px solid #ffffff;
}

div.img a:hover img {
    border: 1px solid #0000ff;
}

div.desc {
  text-align: center;
  font-weight: normal;
  width: 120px;
  margin: 5px;
}
</style>
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
<div align="right"> <a href="logout.php"><h3><Strong>Click here to logout</strong></h3></a><br/><br/> </div>
       
HELLO 
       <strong> <?php echo $_SESSION['user']; ?> </strong> !  <br>
       
        <p>What would you like to listen to today? </p>
	<p>Choose one ! </p>
	<div class="img">
 <a href="bwood.php"><img src="bollywood.jpg" alt="Bollywood" width="110" height="90"/></a>
<div class="desc">BOLLYWOOD</div>
</div>
<div class="img">
 <a target="" href="hwood.php"><img type="image/jpeg" src="hollywood.jpg" alt="Hollywood" width="110" height="90"></a>
<div class="desc">HOLLYWOOD</div>
 
</div>
<div class="img">
 <a target="" href="rock.php"><img src="rock.jpg" alt="Rock" width="110" height="90"></a>
<div class="desc">ROCK</div>
</div>
<div class="img">
 <a target="" href="hiphop.php"><img src="hiphop.jpg" alt="HipHop" width="110" height="90"></a>
<div class="desc">HIP HOP</div>
</div>
<div class="img">
 <a target="" href="pop.php"><img src="pop.jpg" alt="Pop" width="110" height="90"></a>
<div class="desc">POP</div>
</div>
    </body>
</html>
