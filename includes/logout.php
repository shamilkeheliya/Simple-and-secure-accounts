<?php
include_once 'functions.php';

sec_session_start();

// Unset all session values.
$_SESSION = array();

// Get session parameters.
$params = session_get_cookie_params();

// Delete the actual cookie.
setcookie(session_name(),'', 1, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

// Destroy session.
session_destroy();
header("Location: ../index.php");
exit();
