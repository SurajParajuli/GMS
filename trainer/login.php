<?php
if (isset($_POST['login'])) {

	session_start();
	include('conn.php');

	$id = $_POST['id'];
	$password = $_POST['password'];

	$query = mysqli_query($conn, "select * from `trainer` where id='$id'");

	if (mysqli_num_rows($query) == 0) {
		$_SESSION['message'] = "Login Failed. User not Found!";
		header('location:index.php');
	} else{
		$num=mysqli_num_rows($query);
		
			While($row=mysqli_fetch_assoc($query)){
			if(password_verify($password,$row['password'])){
				
				 
			$_SESSION['authenticated'] = true;

		
		header('location:home.php');
		
	}else{
		$_SESSION['message']="Login Failed.Invalid Password!";
		header('location:index.php');
	}
			//if (isset($_POST['remember'])){
			//set up cookie
			
		}
		
		}

		
	}



?>