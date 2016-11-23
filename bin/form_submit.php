<?php
<<<<<<< HEAD

if(IsInjected($inputEmail))
{
    echo "Bad email value!";
    exit;
}

$gender = $_POST['genderRadio'];
$ageThen = $_POST['ageThen'];
$ageNow = $_POST['ageNow'];
$toWhom = $_POST['toWhom'];
$pickedColor = $_POST['pickedColor'];
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
          "Color: $pickedColor \n ".
          "Message \n $message \n ".
          "User Email: $inputEmail \n ".
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $inputEmail \r\n;
mail($to,$email_subject,$email_body,$headers);
header('Location: success.html');
return true;

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
=======
// check if fields passed are empty
if(empty($_POST[''])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'wayj@homecoming.city'; // put your email
$email_subject = "New Unsent Text Received";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: contacts@myprogrammingblog.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
>>>>>>> origin/hcUnsentMainBranch
?>
