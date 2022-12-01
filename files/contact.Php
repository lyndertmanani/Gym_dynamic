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
    <div class="contact">
        <div class="con-body">
        <h1>Get in touch
            <div class="line"></div>
         </h1> 
         </div>
         <div class="container">
         <form   action="../php/mailing.php" method="post">
                <h2>Contact Us</h2>
                <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
                <input type="email" name="email" placeholder="email..." required>
                <textarea name="text" placeholder="Massage here.." required></textarea>
                <button type="submit">Send</button>
            </form>
         </div>
         <script type="text/javascript" src="../Js/main.js"></script>
         <footer>
            <p>All Rights Reserved developed by <span><a href="#">ericlyndert</a></span></p>
            <div class="socials">
                <a href="https://www.twitter.com/ericlyndert"><img src="../assets/icons/twitter.png"></a>
                <a href="https://www.facebook.com/ericlyndert"><img src="../assets/icons/facebook.png"></a>
                <a href="https://www.linkedin.com/ericlyndert"><img src="../assets/icons/linkedin.png"></a>
                <a href="https://www.github.com/ericlyndert"><img src="../assets/icons/github.png"></a>
            </div>
        </footer>
</body>
</html>
         
        
        </div>
    </div>