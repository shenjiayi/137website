<?php
//processFeedback.php

//constract the message to be sent
$sum1= sumOneItem($_POST['order1'],$_POST['count1']);
$price1 = getPrice($_POST['order1']);
$sum2 =0;
$sum3 =0;


function getPrice($order){
	if($order<111115){
		$price=100;
	}
	else if($order<111119){
		$price=200;
	}
	return $price;
}

function sumOneItem($order,$count){
	if($order<111115){
		$sum=100 *$count;
	}
	else if($order<111119){
		$sum=200 *$count;
	}
	return $sum;
}


$messageToBusiness = "From: ".$_POST['firstName']." "
							.$_POST['lastName']." "."\r\n".
					"E-mail address: ".$_POST['email']."\r\n".
					"Phone number: ".$_POST['phone']."\r\n".
					"Order detail below:\r\n\r\n".
					"Order:".$_POST['order1']."   ".
					"Quantity: ".$_POST['count1']."    ".
					"Price: $".$price1."   ".
					"Total: $".$sum1."\r\n";

if(!empty($_POST['order2'])){
	$sum2= sumOneItem($_POST['order2'],$_POST['count2']);
	$price2 = getPrice($_POST['order2']);
	$messageToBusiness.="Order:".$_POST['order2']."   ".
					"Quantity: ".$_POST['count2']."    ".
					"Price: $".$price2."   ".
					"Total: $".$sum2."\r\n";
}
if(!empty($_POST['order3'])){
	$sum3= sumOneItem($_POST['order3'],$_POST['count3']);
	$price3 = getPrice($_POST['order3']);
	$messageToBusiness.="Order:".$_POST['order3']."   ".
					"Quantity: ".$_POST['count3']."    ".
					"Price: $".$price3."   ".
					"Total: $".$sum3."\r\n";
}
$total = $sum1 +$sum2 +$sum3;
$messageToBusiness.="Total: $".$total."\r\n";
$messageToBusiness.="Additional message: ".$_POST['message']."\r\n\r\n";

//send the message to the busines email
$headerToBusiness = "From: $_POST[email]\r\n";
mail("jiaqiz2@uci.edu","Order",$messageToBusiness,$headerToBusiness);

$messageToClient = "Dear ". $_POST['lastName']."\r\n".
					"The following order was receieved from you by Spin:\r\n\r\n".
					$messageToBusiness.
					" -----------------\r\nThank you for the order. We will process it as soon as possible. \r\n".
					"Spin Team\r\n--------------------\r\n";


//Sent the confimation message to client
$headerToClient ="From: spin3dprinting@gmail.com\r\n";
mail($_POST['email'],"RE: orderInfo",$messageToClient,$headerToClient);

//transform into xhtml and display
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display ="<html><head><title>Your message</title></head><body><tt>".
			$display.
			"</tt></body></html>";
echo $display;


//log the message in a file
$fileVar = fopen("../data/orderHistory.txt","a")
	or die("Error: could not open the log file.");
fwrite($fileVar, "\n-----------------------------\n")
	or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date receieved: ".date("jS \of F, Y \a\\t H:i:s\n"))
	or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
	or die("Error: Could not write to the log file.");



?>