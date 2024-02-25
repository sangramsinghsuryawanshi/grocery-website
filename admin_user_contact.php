<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home12.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
<section class="contact">

   <h1 class="title">User Contact</h1>

   <form class="" action="send.php" method="POST">
   <input type="email" name="email" class="box" required placeholder="enter user email">
      <input type="text" name="name" class="box" required placeholder="enter the subject">
      <input type="text" name="message" class="box" required placeholder="enter message">
      <input type="submit" value="Send Email" class="btn" name="send">
   </form>

</section>









<script src="js/script.js"></script>

</body>
</html>