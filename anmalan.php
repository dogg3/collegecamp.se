<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	

$errors = '';
$myemail = 'douglas.landvik@gmail.com';

if(empty($_GET['namn'])  || 
   empty($_GET['lag']) ||
   empty($_GET['mail']) ||
   empty($_GET['adress']) ||
   empty($_GET['postnr']))
  
{
    $errors .= "\n Error: all fields are required";
}

$name = $_GET['namn'];
$lag = $_GET['lag'];
$adress = $_GET['adress'];
$email = $_GET['mail'];
$postnr = $_GET['postnr'];

$headers = "From: csp@example.com" . "\n" .
"CC: Powers_94@hotmail.com";


//gotta put in message in mailfunction //


if (empty($errors)) {
	$to = $myemail;

	$email_subject = "college camp anmälan "; 
	$message = "$name, $lag, $adress, $email, $postnr";
	
	mail($to, $email_subject, $message, $headers);

	header('location: tackform.html');
	
}

else {
	echo "all fields are not field in";
}


 ?>
</body>
</html>