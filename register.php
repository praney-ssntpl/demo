<?php
	if($_SERVER['REQUEST_METHOD']=='GET') {
	if($q_name = $_GET['name'])
	{
		$hint_name = "";	
		$q_name = strtolower($q_name);
		
		if (preg_match("/[^A-Za-z ']/",$q_name)) {
        $hint_name = "Name must contain letters and white space only."; 
		}		
		echo $hint_name === "" ? "" : $hint_name;
	}
	}
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name = $mail = $passwd = "";
					
		function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		 
		 $name = test_input($_POST['usr']);
		 $mail = test_input($_POST['email']);
		 $passwd = test_input($_POST['pwd']);
		 
		 $hash = password_hash($passwd, PASSWORD_DEFAULT);
		 
		 require_once("connection.php");
		 $sql = "INSERT INTO quiz_user (id,name,email,password) VALUES ('','$name','$mail','$hash') ";
		 
		 if(mysqli_query($conn,$sql))
		 {
			//header("Location: home.php");
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Succesfully Registered.You can now Login')
					window.location.href='home.php';
					</SCRIPT>");

		 }
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		mysqli_close($conn);
	}
?>