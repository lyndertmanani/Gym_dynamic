# Gym_dynamic
Just switch you local server (Xampp) and run the website dynamically it will create the datebase
i never created the admin panel for this project manually you i'll insert pictures and info in the product table.
for the pictures just provide the name of the image and it's fomart. no need for te URL

code:

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
 
 
