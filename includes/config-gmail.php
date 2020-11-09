<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('573429393657-5hc0sm983o1ij35nghab4mopj3itfk25.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('tKEx1QqHZ6oAwWIYulryhYGV');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/web1/includes/registration.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>