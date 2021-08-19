<?php


if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$mailFrom=$_POST['email'];
	$message=$_POST['message'];
	
$mailTo = "olomijeezekiel@gmail.com"
$headers = "From: ".$mailFrom 
$txt = "";
	$txt .="You have received an email from " .$name. "\r\n";
	$txt .= .$message. "\r\n";


mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

}
