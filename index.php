<<?php

//Configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);

session_start();

//Make Constant using define.
define('clientID', '9a8fccf161dd4ed58c5c7abb05feb908');
define('clientSecret', '115fcf7a5a4d4eeca1d57963f24a14e3');
define('redirectURI', 'http://localhost/donajiapi/index.php');
define('ImageDirectory', 'pics/');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width, initial-scale=1">
	<title>hey dudes</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	
	<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a>
	<script type="js/main.js"></script>
</body>
</html>