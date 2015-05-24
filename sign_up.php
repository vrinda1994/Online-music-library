<html>
<head>
<title>GaanaMasti.com SignUp</title>

<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }
#login {
margin: 50px auto;
width: 300px;
}

form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;

}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;

}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}
</style>
<script>
function validateForm()
{

var x=document.forms["signup"]["Firstname"].value;

if (x==null || x=="")
{
alert("First name must be filled out");
return false;
}


var y=document.forms["signup"]["Lastname"].value;

if (y==null || y=="")
{
alert("Last name must be filled out");
return false;
}


var e=document.forms["signup"]["Email"].value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
var domain=e.substring(atpos+1,dotpos);
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
{
alert("Not a valid e-mail address");
return false;
}
if(domain!="gmail" && domain!="yahoo" && domain!="rediffmail" && domain!="hotmail" && domain!="msn")
{
alert("Not a valid e-mail address");
return false;
}

	var p1=document.forms["signup"]["pwd"].value;
	var p2=document.forms["signup"]["re_pwd"].value;
	var z=p1.length;
	if((p1!=p2 || !p1))
	{
	alert("Password does not match!!! Please give correct password");
	return false;
	}

	alert ("Signed Up successfully"); 


}
</script>
</head>
<body>
 <div id="login">
<h1><strong>SignUp for GaanaMasti.com.</strong></h1>
<form  name="signup" onsubmit="return validateForm()" action="sign_up.php" method="post">
<fieldset>
<p><strong>FIRSTNAME : <input type="text" name="Firstname" ></STRONG> </p>
<p><strong> LASTNAME :<input type="text" name="Lastname" ></p>
<p><strong> USERNAME :<input type="text" name="Username" ></p>
<p>ENTER YOUR EMAIL :<input type="text" name="Email" ></p>
<p>CREATE A PASSWORD :<input type="password" name="pwd" ></p>
<p>CONFIRM PASSWORD :<input type="password" name="re_pwd" ></p> 
<!--<p> <h1><strong> Please Select your Music preference : </strong></h1>

  <input type="checkbox" name="music[]" value="Bollywood"> Bollywood<br>
  <input type="checkbox" name="music[]" value="Hollywood"> Hollywood<br>
  <input type="checkbox" name="music[]" value="HindiRetro"> Hindi Retro<br>
  <input type="checkbox" name="music[]" value="Rock"> Rock<br>
  <input type="checkbox" name="music[]" value="Hip Hop"> Hip Hop<br> -->
<input type="submit" value="SignUp">
</form>
</fieldset>
</div>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$firstname=mysql_real_escape_string($_POST['Firstname']);
	$lastname=mysql_real_escape_string($_POST['Lastname']);
	$username= mysql_real_escape_string($_POST['Username']);
	$email=mysql_real_escape_string($_POST['Email']);
	$password=mysql_real_escape_string($_POST['pwd']);
	$password=md5($password);
	//$checkbox=$_POST['music'];
	 $bool = true;
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("users_db") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from user");
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['Username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("sign_up.php");</script>'; // redirects
		}
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO user (Firstname,Lastname,Username,Email,Password) VALUES( '$firstname','$lastname','$username','$email','$password')"); //Inserts the value to table users
	
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("main.php");</script>'; // redirects
	}

}
?>
