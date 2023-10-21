<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="header-2">
      <div class="flex">
         <img src="images/logo.png" alt="LOGO">
         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
            <a href="about.php">About</a>
         </nav>
         <div class="navbar">
            <div class="icons">
               <?php
                  $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                  $cart_rows_number = mysqli_num_rows($select_cart_number); 
               ?>
               <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
               <a href="login.php">Login </a>  |  <a href="register.php"> Register</a> |   <a href="logout.php">Logout</a>
            </div>
         </div>
      </div>
   </div>
</header>