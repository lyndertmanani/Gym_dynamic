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
<div class="features">
    <div class="f-column">
        <div class="f-con">
            <h2>Most Featured Equipment </h2>
            <div class="box-f">
                <div class="f-picture-box">
                    <img src="../assets/images/gym (32).jpg">
                </div>
                <div class="f-picture-box">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                   
            </div>
            <div class="box-f">
                <div class="f-picture-box">
                    <img src="../assets/images/gym (37).jpg">
                </div>
                <div class="f-picture-box">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="box-f">
                <div class="f-picture-box">
                    <img src="../assets/images/gym (9).jpg">
                </div>
                <div class="f-picture-box">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="f-con">
  <h1>wearable technology categories</h1>
            
<button class="accordion">Dump bells</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
     laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Chest Press Machine</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Lat Pulldown</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Pac Deck Machine</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
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
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    </script>
    
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>