<?php
//processFeedback.php

//constract the message to be sent

$messageToBusiness = "From: ".$_POST['firstName']." "
							.$_POST['lastName']." "."\r\n".
					"E-mail address: ".$_POST['email']."\r\n".
					"Phone number: ".$_POST['phone']."\r\n".
					"Subject: ".$_POST['subject'."\r\n"].
					$_POST['message']."\r\n";

//send the message to the busines email
$headerToBusiness = "From: $_POST[email]\r\n";
mail("jiayis2@uci.edu",$_POST['subject'],$messageToBusiness,$headerToBusiness);

$messageToClient = "Dear ". $_POST['lastName']."\r\n".
					"The following message was receieved from you by Spin:\r\n\r\n".
					$messageToBusiness.
					" -----------------\r\nThank you for the feedback \r\n".
					"Spin Team\r\n--------------------\r\n";
if($_POST['reply'])
	$messageToClient.="P.S. We will contact you within 24 business hours.";

//Sent the confimation message to client
$headerToClient ="From: spin3dprinting@gmail.com\r\n";
mail($_POST['email'],"RE: ".$_POST['subject'],$messageToClient,$headerToClient);

//transform into xhtml and display
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display ="<html><head><title>Your message</title></head><body><tt>".
			$display.
			"</tt></body></html>";
echo $display;

//log the message in a file
$fileVar = fopen("../data/feedback.txt","a")
	or die("Error: could not open the log file.");
fwrite($fileVar, "\n-----------------------------\n")
	or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date receieved: ".date("jS \of F, Y \a\\t H:i:s\n"))
	or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
	or die("Error: Could not write to the log file.");

?>