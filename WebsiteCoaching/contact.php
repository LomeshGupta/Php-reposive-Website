<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	$txt ="Name = ". $Name . "\r\n  Email = " . $Email . "\r\n Message =" . $Message;

if(empty($Name) || empty($Email) || empty($Message)){
	echo "Please fill all the fields";
}
else{
	mail("Youremail@mail.com", "Mail from website", $txt, "From: $Name < $Email >");
	echo "<script type='text/javascript'>alert('Your Message Sent uccessfully!');window.history.back();</script>";
}
?>