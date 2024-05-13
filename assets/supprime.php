<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to another page or display a message
header("Location: ../index.php");
exit;
?>