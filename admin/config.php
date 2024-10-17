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

$valid_username = 'mariano';
$hashed_password = '$2y$10$QUGfpBr/j/CbR44EGoKkYuPJdJFJ5OjE4b7oCCbOUGYyA.zBOy0hK';

?>