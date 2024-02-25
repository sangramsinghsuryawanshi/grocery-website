<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
   
<?php include 'header.php'; ?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Stocks</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/home12.css">
  
   <style>
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');
.gallary{
    width: 100%;
    padding: 70px 0;
}

.gallary h1{
    font-size: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallary h1 span{
    margin-left: 15px;
    color: #fac031;
    font-family: mv boli;
}

.gallary h1 span::after{
    content: '';
    width: 100%;
    height: 2px;
    background: #fac031;
    display: block;
    position: relative;
    bottom: 15px;
}

.gallary .gallary_image_box{
    width: 95%;
    margin: 10px auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 10px;
}

.gallary .gallary_image_box .gallary_image{
    display: flex;
    align-items: center;
    justify-content: center;
    background: black;
}

.gallary .gallary_image_box .gallary_image img{
    width: 100%;
    transition: .3s;
}

.gallary .gallary_image_box .gallary_image:hover img{
    opacity: 0.4;
}

.gallary .gallary_image_box .gallary_image h3{
    position: absolute;
    font-size: 35px;
    margin-bottom: 130px;
    color: #fac031;
    font-family: polo;
    z-index: 5;
    opacity: 0;
    transition: 0.3s;
}

.gallary .gallary_image_box .gallary_image:hover h3{
    opacity: 1;
}

.gallary .gallary_image_box .gallary_image p{
    position: absolute;
    width: 400px;
    margin-top: 30px;
    text-align: center;
    color: white;
    line-height: 22px;
    opacity: 0;
    z-index: 5;
    transition: 0.3s;
}

.gallary .gallary_image_box .gallary_image:hover p{
    opacity: 1;
}

.gallary .gallary_image_box .gallary_image .gallary_btn{
    position: absolute;
    margin-top: 180px;
    color: #000;
    background: #fac031;
    padding: 7px 25px;
    text-decoration: none;
    opacity: 0;
    transform: translateY(45px);
    z-index: 5;
    transition: 0.3s;
}

.gallary .gallary_image_box .gallary_image:hover .gallary_btn{
    opacity: 1;
    transform: translateY(0);
}



   </style>

</head>
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
<?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
      ?>



    <center>
    <h2>In<b> Stocks</b></h2>
         <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
            <?php
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>".$fetch_products['id']."</td>";
                echo "<td>".$fetch_products['name']."</td>";
                echo "<td>".$fetch_products['category']."</td>";
                echo "<td>".$fetch_products['price']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>

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
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages!</p>';
      }
   ?>

   </div>

</section>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="images/mango.jpg">
                <a href="contact.php" class="gallary_btn" >Contact</a>
            </div>

            <div class="gallary_image">
                <img src="images/chocalate.jpg">
                <a href="contact.php" class="gallary_btn" >Contact</a>
            </div>

            <div class="gallary_image">
                <img src="images/coca cola.jpg">
                <a href="contact.php" class="gallary_btn" >Contact</a>
            </div>

        </div>

    </div>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>