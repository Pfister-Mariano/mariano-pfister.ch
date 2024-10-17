<?php

define('SESSION_LIFETIME', 1); 
define('SESSIONCOOKIE_NAME', md5('NAME'));

$baseUrl = '/_project/admin/';
// 12 Hours
// $session_lifetime = 12 * 60 * 60;

// 5 Minutes
$session_lifetime = 5 * 60;

$isLoggedIn = false; 
$hasError = false;
$errorMessages = array();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mariano_db');

$db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

?>