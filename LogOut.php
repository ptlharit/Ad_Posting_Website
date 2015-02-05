<?php 
session_start();

if(isset($_SESSION['ClientUserName']))
{
	unset($_SESSION['ClientUserName']);
	session_unset();
	session_destroy();
}

header("Location:index.php");
?>