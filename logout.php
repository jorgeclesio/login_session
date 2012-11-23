<?php session_start();
if (isset($_POST["logout"])) 
{
	unset($_SESSION["username"]);
	session_unset();
	session_destroy();
	header("location: index.php?response=2");
}

?>