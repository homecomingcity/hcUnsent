<?php

$gender = $_POST['genderRadio'];
$ageThen = $_POST['ageThen'];
$ageNow = $_POST['ageNow'];
$toWhom = $_POST['toWhom'];
$colortext = $_POST['color-text'];
$message = $_POST['message'];
$inputEmail = $_POST['inputEmail'];
$email_from = 'wayj@homecoming.city'

// create email body and send it
$to = 'unsent@homecoming.city'; // email to receive submissions
$email_subject = "New Unsent Text Received";
$email_body = "You have received a new message. \n\n".
				  "Gender: $gender \n ".
				  "Age Then: $ageThen\n Age Now: $ageNow \n ";
          "To: $toWhom \n ".
          "Color: $colortext \n ".
          "Message \n $message \n ".
          "User Email: $inputEmail \n ".
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $inputEmail \r\n;
mail($to,$email_subject,$email_body,$headers);
header('Location: success.html');
return true;

?>
