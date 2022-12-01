<?php
    session_start();

    if (isset($_SESSION['username'])) {
    header("Location:../files/wanted.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/min.css">
</head>
<body>
	<!-- log in form-->
     <form  action="../php/log-check.php" method="post">
    <!--php notify-->
     	<img src="../assets/icons/logo.png" class="logo" alt="logo">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<!--Text-Box -->
		 <section class="input-btn-all">
     	<input type="text" name="username" placeholder="username...">
     	<input type="password" name="password"  placeholder="Password">
		<button type="submit">Login</button><br>
		<p class="fgt-pss-wrd">
			<span><a href="../files/signup.php">Signup</a></span> | 
			I forgot my <a   href=" ">Password ?</a> | 
			<span><a href="">Help</a></span>
		</p>
		</section>
     </form>
</body>
</html>