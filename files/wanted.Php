<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include '../php/net.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<title>Gym | Search..</title>
</head>
<body class="w-body">
<!------nav-bar------->
    <nav class="w-nav">	
    <div class="upper-nav" id="upper-slicky"> 
    <img src="../assets/icons/logo-x.png" width="99px"> 
    <?php
     if (isset($_SESSION['username']))
    {echo '<a href="../php/exit.php">log out</a>';}
     ?>
    <a href="../files/contact.php">Contact us</a>
    <a href="../files/features.php">Features</a>
    <a href="../files/login.php">Wanted</a>
    <a href="../files/gallery.php">Gallery</a>
    <a href="../files/workshop.php">Workshop</a>
    <a href="../files/info.php">Information</a>
    <a href="../files/home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="mobileview()"><i class="fa fa-bars"></i></a>
    </div>
    </nav>
    <!------all-content-sector------->
<div class="w-content">
    <div class="w-display">
        <h1>Discover</h1>
        <p>Our amazing products</p>
        <form method="POST" action="wanted.php">
            <input type="search" name="search" placeholder="Search by name or price" required>
            <input type="submit" value="search">
        </form>
        <div class="search-board">
            <div class="srch-box-hold"> 
            <div class="item_box">
            <?php

 if (isset($_POST['search'])) {
 $search = $_POST['search'];
 $result = $mysqli->query("select * from products where product_name like '%$search%' or price like '%$search%' ");
 if($result === FALSE){
   die(mysql_error());
 }
 if($result){
     while($obj = $result->fetch_object()) {
     echo '<div class="srch-box">';
     echo '<div class="srch-picture">';
     echo '<img src="../assets/images/'.$obj->product_img_name.'"/>';
     echo '</div>';
     echo '<h3>'.$obj->product_name.'</h3>';
     echo '<p> '.$obj->product_desc.'</p>';
     echo '<p><strong>Available</strong> '.$obj->qty.'</p>';
     echo '<p class="cost">'.$currency .$obj->price.' </p>';   
     echo '</div>';
   }
 }
 echo '</div>';
 echo '</div>';
 }
?>             
            </div>
            </div>
   
    </div>
</div>

<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>