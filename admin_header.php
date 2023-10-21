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

   <img src="images/admin-logo.png" alt="LOGO">

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
      </nav>
      <div class="navbar">
      <div class="icons">
               <a href="login.php">Login </a>  |  <a href="register.php"> Register</a> |   <a href="logout.php">Logout</a>
            </div>
      </div>
   </div>
</div>

</header>