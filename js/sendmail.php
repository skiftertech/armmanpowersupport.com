<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];
if($name=='' || $phone==''|| $date==''||$time==''||$email==''|| $message==''){
	echo "</script>alert('All fields are required !')</script>";
} else {

$from       = "Dentalcare";
$webmaster  = "shakthidentalcare@yahoo.com"; //It's web master mail info@example.com
$to         = "npriya97n@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From dentalcare";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('index.php?sent=Your Form Has been Submited','_self')</script>";
}
}

?>