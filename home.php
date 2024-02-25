<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home12.css">
</head>
<body>
   
<?php include 'header.php'; ?>
<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>don't panic,go with fast and reliable delivery to your doorstep.</span>
         <h3>Reach our website to buy a wide range of high-quality products and enjoy exceptional customer service.</h3>
         <p></p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
.container header {
  font-size: 60px;
  color: black;
  font-weight: 600;
  text-align: center;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');
.main {
   width: 100%;
    height: 100vh;
    background: url('../htdocs/images/home-bg.jpg') center center;
    background-size: cover;
}

.overlay {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    background-color: black ;
}

.title1 {
    margin-top: 10px;
    color: red;
    text-align: center;
    font-size: 2.5rem;
    text-decoration: underline;
}

.col {
    margin-top: 20px;
    width: 100%;
    display: flex;
    justify-content: center;
    color: black;
}

.col div {
    width: 150px;
    text-align: center;
}

input {
    width: 50%;
    background-color: whitesmoke;
    color: blue;
    border-color: black;
    border-radius: 5px;
    height: 50px;
    text-align: center;
    font-size: 30px;
}
    </style>
  </head>
  <body>
    <section class="container">
    <center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
      <header>Comming Soon</header>
       <div class="title1" id="end-date">27 March 2024 08:00 PM</div>
      <div class="col">
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label for="">Days</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label for="">Hours</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label for="">Minutes</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label for="">Seconds</label>
                </div>
            </div>
    </section>
    <script>
     const endDate = "27 march 2024 08:20:00 PM"

document.getElementById("end-date").innerText = endDate;
const inputs = document.querySelectorAll("input")
    // const clock = () => {

// }

function clock() {
    const end = new Date(endDate)
    const now = new Date()
    const diff = (end - now) / 1000;

    if (diff < 0) return;

    // convert into days;
    inputs[0].value = Math.floor(diff / 3600 / 24);
    inputs[1].value = Math.floor(diff / 3600) % 24;
    inputs[2].value = Math.floor(diff / 60) % 60;
    inputs[3].value = Math.floor(diff) % 60;
}

// initial call
clock()

/**
 *  1 day = 24 hrs
 *  1 hr = 60 mins
 *  60 min = 3600 sec
 */

setInterval(
    () => {
        clock()
    },
    1000
)
</script>
    
</body>
</html>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>At FreshFruit Delights, we are passionate about providing our customers with the freshest and most delectable fruits nature has to offer.We understand the importance of incorporating fruits into a balanced diet and promoting a healthy lifestyle. </p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/chicken.png" alt="">
         <h3>meat</h3>
         <p>we take great pride in offering our customers the finest selection of high-quality meats.Lean Cuts We understand that meat is not just an ingredient but the centerpiece of many memorable meals.Opting for lean cuts of meat, such as skinless poultry or lean beef, can help reduce saturated fat intake.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>we are passionate about bringing you the highest quality and freshest vegetables available. We believe that vegetables are the cornerstone of a healthy diet, and we strive to provide our customers.Vegetables are rich in essential nutrients, including vitamins, minerals, fiber, and antioxidants. </p>
         <a href="category.php?category=vegitables" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" height="200px" alt="">
         <h3>fish</h3>
         <p>we are passionate about bringing you the finest selection of fresh and sustainably sourced fish and seafood. Our mission is to provide you with the highest quality seafood products while promoting responsible fishing practices and supporting the health of our oceans.</p>
         <a href="category.php?category=fish" class="btn">fish</a>
      </div>

      <div class="box">
         <img src="images/sweets.png" alt="">
         <h3>sweets</h3>
         <p>Sweets have cultural significance in many societies and are often associated with celebrations, festivals, and special occasions. For example, in Western cultures, candy canes are popular during Christmas, while chocolate eggs are common during Easter.</p>
         <a href="category.php?category=sweets" class="btn">sweets</a>
      </div>

      <div class="box">
         <img src="images/i.png" alt="">
         <h3>icecrem</h3>
         <p>Ice cream comes in a wide variety of flavors to suit different preferences. Some popular flavors include vanilla, chocolate, strawberry, mint chocolate chip, cookies and cream, coffee, and butter pecan. There are also unique and innovative flavors available.</p>
         <a href="category.php?category=icecrem" class="btn">icecrem</a>
      </div>

      <div class="box">
         <img src="images/c.png" alt="">
         <h3>coldrinks</h3>
         <p>These drinks are made from the extracted or pressed juices of fruits. They can be either 100% fruit juice or diluted with water and sweetened. Some common fruit juices include orange juice, apple juice, grape juice, and pineapple juice.</p>
         <a href="category.php?category=coldrinks" class="btn">coldrinks</a>
      </div>

      <div class="box">
         <img src="images/cake.jpg" alt="">
         <h3>cakes</h3>
         <p>A cake is a sweet baked dessert that is typically made from a combination of flour, sugar, eggs, butter or oil, and leavening agents such as baking powder or baking soda. Cakes are often frosted or decorated .</p>
         <a href="category.php?category=cakes" class="btn">cakes</a>
</div>

</section>
<section class="home-category">

   <h1 class="title">Discount And Stock Section</h1>

   <div class="box-container">
      <div class="box">
         <img src="images/sale.jpg" alt="">
         <h3>discount</h3>
         <p>Indulge your taste buds while saving big with our exciting Food Discount Offer! We're thrilled to present a limited-time opportunity for you to enjoy your favorite dishes at unbeatable prices. From mouthwatering appetizers to sumptuous main courses and delectable desserts. </p>
         <a href="discount.php" class="btn">Discount</a>
      </div>
      <div class="box">
         <img src="images/stock.png" style="mix-blend-mode: darken;" alt="">
         <h3>Stocks</h3>
         <p>In the bustling aisles of our Empires Foods, where the aroma of fresh produce mingles with the anticipation of culinary delights, an interesting situation has arisen. Amidst the array of products that line the shelves, a single item has chosen to elude us, momentarily slipping out of stock. </p>
         <a href="stock.php" class="btn">Stocks</a>
      </div>
   </div>

</section>
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">&#8377;<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</section>


 



<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>