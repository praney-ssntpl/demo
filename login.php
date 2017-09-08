<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require_once("connection.php");
		
		$usrname = mysqli_real_escape_string($conn,$_POST['usrname']);
		$logpwd = mysqli_real_escape_string($conn,$_POST['logpwd']);
				
		$sql = "SELECT id,password FROM quiz_user WHERE email = '$usrname' ";
		
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		
		if (password_verify($logpwd, $row['password'])) {
		$valid = true;
		} else {
		$valid = false;
		}			
		
		$count = mysqli_num_rows($result);
		
		if($count == 1 && $valid)
		{
			header("Location: welcome.php");
		}
	    else
	    {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Invalid login credentials')
					window.location.href='home.php';
					</SCRIPT>");
		}
	}

?>