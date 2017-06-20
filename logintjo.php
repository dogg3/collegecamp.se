

					 <?php  
session_start();
?>



<!DOCTYPE html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LOG IN</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="loginsql.css" rel="stylesheet">

</head>
<body>


<?php include 'header.php'; ?>

<div class="container col-xs-12">
  <?php 
//error handling registrer
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'error=empty')) {
  echo "<div class=' error col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4'>fill out all fields</div>";
} 
if(strpos($url, 'error=uid')) {
  echo "<div class=' error col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4'; '>the username is taken</div>";
} 
?>

<form class='loggain col-xs-10  col-sm-6 col-md-4 ' action='login.php' method='POST'>
						<input class='col-xs-4'  type='text' name='uid' placeholder='username'>
						<input class='col-xs-4'  type='password' name='pwd' placeholder='password'>
						<button class='col-xs-3'  class='button' type='submit'>log in</button>
					</form>



 
</div>


 
<?php include 'footer.php' ?>



</body>
</html>