<?php
if(isset($_POST['submit2'])) {
	
$name = $_POST['name2'];
$email = $_POST['email2'];
$phone = $_POST['phone2'];
$message = $_POST['message2'];
if($name=='' || $phone==''||$email==''|| $message==''){
	echo "</script>alert('All fields are required !')</script>";
} else {

$from       = "Web Design Concern";
$webmaster  = "admin@ncvte.ac.in"; //It's web master mail info@example.com
$to         = "skiftertech@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From dentalcare";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name2']  ."</p>";
$message .= "<p>Phone :".$_POST['phone2']  ."</p>";
$message .= "<p>Email : ". $_POST['email2'] ."</p>";
$message .= "<p>Message :".$_POST['message2']."</p>";
$message .= "</body></html>";

$sendmail = mail('skiftertech@gmail.com', $subject, $message, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('index.php?sent=Your Form Has been Submited','_self')</script>";
}
}