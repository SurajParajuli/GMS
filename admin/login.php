<?php
	if(isset($_POST['login'])){
 
		session_start();
		include('conn.php');
 
		$email=$_POST['email'];
		$password=$_POST['password'];
 
		$query=mysqli_query($conn,"select * from `adminlogin` where  email='$email' && password='$password'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']='Login Failed. User not Found!';
			
			header("location:index.php");
			
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST[1])){
				//set up cookie
				setcookie('email', $email, time() + 3600); 
				
			}
 
			$_SESSION['authenticated'] = true;
			header('location:home.php');
		}
	}
	
?>