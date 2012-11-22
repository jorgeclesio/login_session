<?php session_start();
?>
<html>
<head>
	<title>Home</title>	
</head>

<?php
//$_SESSION["username"]=$_POST["username"];
echo "Welcome ".$_SESSION["username"];
//echo "Welcome Kunwar.";
?>
<?php 
include("logout.php");
?>
<form method="post" action="logout.php">
<input type="submit" name="logout" value="Log Out" />
</form>
</html>