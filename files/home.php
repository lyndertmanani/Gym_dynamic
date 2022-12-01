<?php
    session_start();
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
<title>Welcome | home..</title>
</head>
<body>
<!------nav-bar------->
<nav>	
<div class="upper-nav" id="upper-slicky"> 
<img src="../assets/icons/logo.png" width="99px"> 
<?php
     if (isset($_SESSION['username']))
    {echo '<a href="../php/exit.php">log out</a>';}
     ?>
<a href="../files/contact.Php">Contact us</a>
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
<div class="content" >

 <!------Slide-show(landing page)------->
    <div class="slideshow-container" id="home">
        <form class="srch-hme">
            <input class="input-srch" title="search for gym equipment" type="search" placeholder="search.." class="srch_hme_input" />
            <input class="btn_srch" type="submit" value="search" />
        </form>
   
    <div class="myShow fade">
    <img src="../assets/images/ep5.jpg" style="width:100%">
    </div>
    <div class="myShow fade">     
    <img src="../assets/images/ep6.jpg"  style="width:100%">   
    </div>
    <div class="myShow fade">
    <img src="../assets/images/slide8.jpg"  style="width:100%">   
    </div>

    <div style="text-align:center" class="dots">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>
    </div>
 <!------View(view-counter)------->
<div class="view-counter">
<div class="view-hold">
<h3>Daily customer Viewers</h3>
<p>simple overview</p><br>
<h1 id="count">0</h1>
</div>
</div>
 <!------Videos(video-content)------->  
 <div class="video-content">
<div class="video-box">
    <h1>Stay strong and healthy</h1>
    <p> welcome to The home of gym equipment</p>
</div>
<div class="video-box">
<video src="../assets/videos/vid (2).mp4" muted autoplay loop >
</div>
<div class="video-box" id="vid-x">
    <h1>Get epuiqed with us today</h1>
    <p>orginal classic equipments</p>
</div>
<div class="video-box">
    <video src="../assets/videos/vid (1).mp4" muted autoplay loop ></video>
</div>
<div class="video-box" id="vid-y">
    <h1>Get epuiqed with us </h1>
    <p>orginal classic equipments</p>
</div>
 </div> 
<footer>
    <p>All Rights Reserved developed by <span><a href="#">ericlyndert</a></span></p>
    <div class="socials">
        <a href="https://www.twitter.com/ericlyndert"><img src="../assets/icons/twitter.png"></a>
        <a href="https://www.facebook.com/ericlyndert"><img src="../assets/icons/facebook.png"></a>
        <a href="https://www.linkedin.com/ericlyndert"><img src="../assets/icons/linkedin.png"></a>
        <a href="https://www.github.com/ericlyndert"><img src="../assets/icons/github.png"></a>
    </div>
</footer>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>