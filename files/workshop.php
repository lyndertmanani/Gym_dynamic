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
<div class="system">
    <div class="overview">
        <h1>Completed Repairs</h1>
        <p>25% discount for this month </p>
        <div class="overview-box">
            <img src="../assets/images/gym (7).jpg">
        </div>
        <div class="overview-box">
            <img src="../assets/images/gym (2).jpg">
        </div>
        <div class="overview-box">
            <img src="../assets/images/gym (18).jpg">
        </div>
        <div class="overview-box">
            <img src="../assets/images/gym (10).jpg">
        </div>
    </div>
    <h1>Repair With Us</h1>
    <div class="repair-plan">
        <div class="plan-box">
            <h1>Portable</h1>
            <div class="plan-text">
                <p><img src="../assets/icons/ok.png" width="20"> Repair specifics</p>
                <p><img src="../assets/icons/ok.png" width="20"> Clean</p>
                <p><img src="../assets/icons/exit.png" width="20"> Delivery</p> 
                <p><img src="../assets/icons/exit.png" width="20"> Express</p>   
                <p><img src="../assets/icons/exit.png" width="20"> Painting</p>
       </div>
       <button class="re-btn">Repair</button>
 
        </div>
        <div class="plan-box">
            <h1>Standard</h1>
            <div class="plan-text">
                <p><img src="../assets/icons/ok.png" width="20"> Repair specifics</p>
                <p><img src="../assets/icons/ok.png" width="20"> Clean</p>
                <p><img src="../assets/icons/exit.png" width="20"> Delivery</p> 
                <p><img src="../assets/icons/exit.png" width="20"> Express</p>   
                <p><img src="../assets/icons/ok.png" width="20"> Painting</p>              
           </div>
           <button class="re-btn">Repair</button>
        </div>
        <div class="plan-box">
            <h1>Premium<img src="../assets/icons/verified.png" width="20px"></h1>
            <div class="plan-text">
                <p><img src="../assets/icons/ok.png" width="20"> Repair specifics</p>
                <p><img src="../assets/icons/ok.png" width="20"> Clean</p>
                <p><img src="../assets/icons/ok.png" width="20"> Delivery</p> 
                <p><img src="../assets/icons/ok.png" width="20"> Express</p>   
                <p><img src="../assets/icons/ok.png" width="20"> Painting</p>                
           </div>
           <button class="re-btn">Repair</button>
        </div>
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