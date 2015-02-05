<?php 
session_start();

if(isset($_SESSION['AdminUserName']))
{
	unset($_SESSION['AdminUserName']);
	session_unset();
	session_destroy();
}

header("Location:index.php");
?>