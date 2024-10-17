<?php
require_once('./config.php');

session_name(SESSIONCOOKIE_NAME);
session_start();

if ( !isset($_SESSION['username'], $_SESSION['logintime'], $_SESSION['userip'], $_SESSION['useragent']) || 
    $_SESSION['userip'] !== $_SERVER['REMOTE_ADDR'] || 
    $_SESSION['useragent'] !== $_SERVER['HTTP_USER_AGENT'] ||
    time() - $_SESSION['logintime'] > $session_lifetime
   ) {
    header("Location: login/login.php");
    exit;
}
?>
