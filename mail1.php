<?php
if(isset($_POST['submit1'])) {
	
$name = $_POST['name1'];
$phone = $_POST['phone1'];
$email = $_POST['email1'];
$date = $_POST['date1'];
$time = $_POST['time1'];
$message = $_POST['message1'];

$from       = "Dentalcare";
$webmaster  = "admin@ncvte.ac.in"; //It's web master mail info@example.com
$to         = "skiftertech@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From dentalcare";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";

$message .= "<p>Name :".$_POST['name1']  ."</p>";
$message .= "<p>Phone :".$_POST['phone1']  ."</p>";
$message .= "<p>Date :".$_POST['date1']  ."</p>";
$message .= "<p>Time :".$_POST['time1']  ."</p>";
$message .= "<p>Email : ". $_POST['email1'] ."</p>";
$message .= "<p>Message :".$_POST['message1']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('index.php?sent=Your Form Has been Submited','_self')</script>";
}


?>