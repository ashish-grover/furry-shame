<?php
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$email=$_POST['email'];
	
	require_once('connect.php');
	
	$sql="insert into user values('".$username."', '".$password."', '".$email."', null, null, 1, null, null, null, null, null, '".date('d-m-Y')."')";
	$res=mysql_query($sql);
	
	if($res)
	{
		echo "Registered successfully!";
	}
	else
	{
		echo "Registration failed :(";
	}	
?>
<a href="register.php">Click here to register again</a>