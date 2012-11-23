<?php session_start();
?>
<html>
<head>
	<title>Home</title>	
</head>

<?php
if(!isset($_SESSION["username"]))    //checks the session start condition
{
	header("location: index.php");   //redirect to index
}
else{
	echo "Welcome ".$_SESSION["username"];
}
?>

<form method="post" action="logout.php">
<input type="submit" name="logout" value="Log Out" />
</form>
</html>