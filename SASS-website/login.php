<?php

session_start();

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];
$connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to database");
mysqli_select_db($connect, "login") or die ("Couldn't find database");
	

	$query = mysqli_query($connect, "SELECT * FROM userinfo WHERE username='$username'");
        $count = mysqli_num_rows($query);
	
	if ($count == 1){
$_SESSION['username'] = $username;
header("Location: disp.php"); 
exit;
}else{

echo "Invalid Login Credentials.";
}
}

?> 