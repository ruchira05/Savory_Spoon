<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/logo.png" alt="">
      </div>

      <div class="content">
         <h3>why savory spoon?</h3>
         <p>At Savory Spoon, we take pride in crafting a dining experience like no other. Our commitment to culinary excellence, attention to detail, and dedication to using only the freshest, highest-quality ingredients set us apart.</p>
         <p>Whether you're seeking a cozy spot for a romantic dinner or a friendly gathering, our warm ambiance and diverse menu cater to all tastes and occasions. With our passionate chefs and a menu designed to delight, every visit to our restaurant promises exceptional flavors, impeccable service, and unforgettable memories. Discover why people choose us for a dining experience that transcends the ordinary.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

</body>
</html>