<?php

 include "./net.php";

$email = $_POST["email"];
$emails = $_POST["text"];

if($mysqli->query("INSERT INTO massage (email, emails)
 VALUES('$email', '$emails')")){
	header("Location:../files/contact.php?error=The gym will respond as soon as possible through your email address...");
    exit(); 
}
header ("location:../files/contact.php");
?>