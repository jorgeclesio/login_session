<?php session_start();
if (isset($_POST["logout"])) 
{
	unset($_SESSION["username"]);
	session_unset(); //Ótimo nível de segurança
	session_destroy();
	header("location: index.php?response=2");
}

?>
