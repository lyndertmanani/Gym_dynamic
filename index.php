<?php

$sname= "localhost";
$uname= "root";
$password = "";

$conn = mysqli_connect($sname, $uname, $password);

if (!$conn) {
	echo "Connection failed!";
}

$sql = "CREATE DATABASE IF NOT EXISTS dynamic_gym";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$sname= "localhost";
$uname= "root";
$password = "";
$dbname="dynamic_gym";

$conn = mysqli_connect($sname, $uname, $password,$dbname);

  $createtbP = "CREATE TABLE IF NOT EXISTS `products` (
    `id` int(11) NOT NULL auto_increment,
    `product_name` varchar(60) NOT NULL,
    `product_desc` tinytext NOT NULL,
    `product_img_name` varchar(60) NOT NULL,
    `qty` int(5) NOT NULL,
    `price` decimal(10,2) NOT NULL,
    PRIMARY KEY  (`id`)
    
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;";
    mysqli_query($conn,$createtbP);
    
    $createtbU = "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL auto_increment,
        `fname` varchar(255) NOT NULL,
        `lname` varchar(255) NOT NULL,
        `username` varchar(255) NOT NULL,
        `password` varchar(15) NOT NULL,
        PRIMARY KEY  (`id`),
        UNIQUE KEY `username` (`username`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;";
        mysqli_query($conn,$createtbU);

        $createteml = "CREATE TABLE IF NOT EXISTS `massage` (
          `id` int(11) NOT NULL auto_increment,
          `email` varchar(60) NOT NULL,
          `e-mails` tinytext NOT NULL,
          PRIMARY KEY  (`id`)  
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;";
          mysqli_query($conn,$createteml);


    if ($conn->query($sql) === TRUE) {
         header("Location: ./files/home.php");
	        exit();
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?>