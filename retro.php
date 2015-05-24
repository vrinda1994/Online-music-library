<html>
<head>
<title>BOLLYWOOD</title>
</head>

<body>
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
$query = mysql_query("Select * from retro");

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
