<html>
<body>
<?php

$emailid="yuv.slm@gmail.com";

$con=mysql_connect("localhost","root","");

mysql_select_db('itrix13',$con);

if (!$con)
{
  echo "Failed to connect to MySQL: " . mysql_error();
}

$result = mysql_query("SELECT * FROM registeredusers where email='yuv.slm@gmail.com'");

while($row = mysql_fetch_array($result))
{
  echo $row['id'];
  echo "<br>";
  echo $row['itrixid'];
  echo "<br>";
  echo $row['name'];
  echo "<br>";
  echo $row['email'];
  echo "<br>";
  echo $row['gender'];
  echo "<br>";
  echo $row['phonenumber'];
  echo "<br>";
  echo $row['organisationname'];
  echo "<br>";
  echo $row['accomdation'];
}



mysql_close($con);

?>

</body>
</html>