<?php 

session_start(); 
include "./net.php";


if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	
	if (empty($username)) {
		header("Location:../files/login.php?error=Username is required");
	    exit();
	}else if(empty($password)){
        header("Location: ../files/login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['lname'] = $row['lname'];
            	$_SESSION['id'] = $row['id'];
				header("Location:../files/wanted.php");
		        exit();
            }else{
				header("Location:../files/login.php?error=Incorrect username or Password");
		        exit();
			}
		}else{
			header("Location:../files/login.php?error=Incorrect username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: ../files/login.php");
	exit();
}

