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

mysql_select_db("ceg_startup_corner",$con) OR die(mysql_error());


mysql_query("INSERT INTO registrations(company,owners,email,contact,contribution) VALUES ('$company','$owners','$email','$contact','$contribution')") OR die(mysql_error());


mysql_close($con);

$to = $email;

$subject = "Confirming your registration in CEG Startup Corner";
$headers = "From: " . "Kurukshetra-CEG Startup Corner" . "\r\n";
$headers .= "Reply-To: ". "industryrelations@kurukshetra.org.in" . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .='<p>Thanks for registering in CEG Startup Corner. Your details are as follows:</p><br/>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Company</strong> </td><td>" .$company. "</td></tr>";
$message .= "<tr><td><strong>Email</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Owners</strong> </td><td>" . $owners . "</td></tr>";
$message .= "<tr><td><strong>Contact</strong> </td><td>" .$contact."</td></tr>";
$message .= "<tr><td><strong>Contribution</strong> </td><td>" .$contribution."</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


//mail($to,$subject,$message,$headers);


$to1 = "industryrelations@kurukshetra.org.in";
$subject1 = "New registration in CEG startup corner";

$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message1 = '<html><body>';
$message1 .="<p>There's a new registration in CEG startup corner; the details are as follows:</p><br/>";
$message1 .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message1 .= "<tr style='background: #eee;'><td><strong>Company</strong> </td><td>" .$company. "</td></tr>";
$message1 .= "<tr><td><strong>Email</strong> </td><td>" . $email . "</td></tr>";
$message1 .= "<tr><td><strong>Owners</strong> </td><td>" . $owners . "</td></tr>";
$message1 .= "<tr><td><strong>Contact</strong> </td><td>" .$contact."</td></tr>";
$message1 .= "<tr><td><strong>Contribution</strong> </td><td>" .$contribution."</td></tr>";
$message1 .= "</table>";
$message1 .= "</body></html>";


//mail($to1,$subject1,$message1,$headers1);





}
?>




