<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="bollar.png">
	<title></title>
</head>
<body>
<?php 
	

$errors = '';
$myemail = 'douglas.landvik@gmail.com';

if(empty($_GET['namn'])  || 
   empty($_GET['mail']) ||
   empty($_GET['message']) )
  
{
    $errors .= "\n Error: all fields are required";
}

$name = $_GET['namn'];
$text = $_GET['message'];

$email = $_GET['mail'];

$headers = "From: csp@example.com" . "\n" .
"CC: Powers_94@hotmail.com";


//gotta put in message in mailfunction //


if (empty($errors)) {
	$to = $myemail;
	$email_subject = "kontakt "; 
	$message = "$name, $email, $text";
	
	mail($to, $email_subject, $message, $headers);

	header('location: kontakttack.html');
	
}

else {
	echo "all fields are not field in";
}


 ?>
</body>
</html>