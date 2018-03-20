<?php

session_start();

 $username = $_POST['username'];
 $password = $_POST['password'];

if ($username && $password)
{
	$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to database");
	mysqli_select_db($connect, "login") or die ("Couldn't find databse");
	
	$query = mysqli_query($connect, "SELECT * FROM userinfo WHERE username='$username'");
	$numrows =  mysqli_num_rows($result);
	if($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['Username'];
            $dbpassword = $row['Password'];
		}
		if($username==$dbusername&&$password==$dbpassword)	
		{
			echo "You are logged in";
			@$_SESSION['username'] = $username;
			//header('Location:disp.php');

			
		
		else
			echo "Password Incorrect!!" ;
		}
		else
			die("user doesn't exist");
		
}
else
	die("please enter a username and password!");
}
?>