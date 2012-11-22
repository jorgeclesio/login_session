<html>
	<head>
		<title>Login Form</title>
		
	</head>
	
	<body>
		<?php 
		include ("loginhandle.php");  //including loginhandle file for validation
		//echo "Wrong username or Password";
		?>
		
		<form method="post" action="loginhandle.php">
			<label><h4>Login Form</h4></label><br />
			
			 <?php 
				if(isset ($_GET['response']))
					{
    					if ($_GET['response']=="1")
    						{
      							echo "Wrong Username or Password";
    						}
				   	   if ($_GET['response']=="2")
    						{
      							echo "Successfully logged out";
    						}
					
					}
			?>		<br />
			<label>Username:</label><input type="text" id="username"  name="username"/><br />
			<label>Password:</label><input type="password" id="password" name="password"/><br /><br />
			<input type="submit"  name="submit" value="Log In" />
		</form>
		
		
	</body>
	
	
</html>