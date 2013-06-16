<?php
$con = mysql_connect('localhost','root','');
if(!$con)
{
die("connection failed: ".mysql_error());
}
else
{
//echo "connection established";
$company=$_POST['company'];
$owners=$_POST['owners'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$contribution=$_POST['contribution'];

mysql_select_db("jquery_ajax_exampledb",$con) OR die(mysql_error());


mysql_query("INSERT INTO registrations(company,owners,email,contact,contribution) VALUES ('$company','$owners','$email','$contact','$contribution')") OR die(mysql_error());


mysql_close($con);
echo "<a href='index.html'>go back to the previous page</a>";
}
?>