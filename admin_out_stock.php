<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $category = $_POST['category'];
   $category = filter_var($category, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_stock = $conn->prepare("SELECT * FROM `stock` WHERE name = ? AND price = ? AND category = ? AND message = ?");
   $select_stock->execute([$name, $price, $category, $msg]);

   if($select_stock->rowCount() > 0){
      $stock[] = 'already sent message!';
   }else{

      $insert_stock = $conn->prepare("INSERT INTO `stock`(name, price,category, message) VALUES(?,?,?,?)");
      $insert_stock->execute([$name, $price, $category, $msg]);

      $stock[] = 'sent message successfully!';

   }

}
if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `stock` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:admin_out_stock.php');

}

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
   <link rel="stylesheet" href="css/contactnow.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="contact">
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
   <h1 class="title">Stocks Form</h1>

   <form action="" method="POST">
      <input type="text" name="name" class="box" required placeholder="enter name">
      <input type="number" name="price" class="box" required placeholder="enter price">
      <select name="category" class="box" required>
            <option value="" selected disabled>select category</option>
               <option value="vegitables">vegitables</option>
               <option value="fruits">fruits</option>
               <option value="meat">meat</option>
               <option value="fish">fish</option>
               <option value="sweets">sweets</option>
               <option value="icecrem">icecrem</option>
               <option value="coldrinks">coldrinks</option>
               <option value="cakes">cakes</option>
         </select>
      <textarea name="msg" class="box" required placeholder="enter message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" class="btn" name="send">
   </form>

</section>

<div class="gallary" id="Gallary">
        <h1>Out Of<span>Stocks</span></h1>
        <section class="messages1">

   <div class="box-container1">

   <?php
      $select_stock = $conn->prepare("SELECT * FROM `stock`");
      $select_stock->execute();
      if($select_stock->rowCount() > 0){
         while($fetch_stock = $select_stock->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box1">
      <p> id : <span><?= $fetch_stock['id']; ?></span> </p>
      <p> name : <span><?= $fetch_stock['name']; ?></span> </p>
      <p> price : <span><?= $fetch_stock['price']; ?></span> </p>
      <p> category : <span><?= $fetch_stock['category']; ?></span> </p>
      <p> message : <span><?= $fetch_stock['message']; ?></span> </p>
      <a href="admin_out_stock.php?delete=<?= $fetch_stock['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages!</p>';
      }
   ?>

   </div>

</section>








<script src="js/script.js"></script>

</body>
</html>