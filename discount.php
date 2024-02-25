<?php

@include 'config.php';

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
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home12.css">
<style>
   
</style>
</head>
<body>
   
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
</head>
<body>

<div class="banner-bg">

<section class="banner">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/apple.png" alt="">
         </div>
         <div class="content">
            <span>upto 20% off</span>
            <h3>Kashmiri Apples</h3>
            <a href="category.php?category=fruits" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/broccoli.png" alt="">
         </div>
         <div class="content">
            <span >upto 20% off</span>
            <h3>Fresh Broccoli</h3>
            <a href="view_page.php?pid=11" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/carrot.png" alt="">
         </div>
         <div class="content">
            <span>upto 20% off</span>
            <h3>Healthy Carrot</h3>
            <a href="view_page.php?pid=14" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});
</script>

</body>
</html>
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
      <header>Huury Up Date Expiring Soon</header>
       <div class="title1" id="end-date">20 March 2022 10:00 PM</div>
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
<section id="discount" data-aos="fade-up">
   <div class="container1" >
   <h1>Offers For<span>3 Months Shop Now!</span></h1>
   </div>
    <div class="container">
      <div class="discount__wrapper">
        <div class="discount__images">
          <div class="discount__img2">
            <img src="./images/gulab jamun1.jpg" style="mix-blend-mode: darken;" alt="Food img">
          </div>
        </div>
        <div class="discount__info">
          <h3 class="discount__text">10% OFF</h3>
          <h3 class="discount__title">Demo Foods For Discount</h3>
          <h3 class="discount__price">
         <p>#Icecrem</p><span class="discount__oldPrice">&#8377;199</span>
            <span class="discount__newPrice">&#8377;189</span>
          </h3>
          <div class="discount__stars">
          <img src="./images/star.png" alt="stars" width="100%" height="200%" >
          </div>
          <a class="btn primary-btn" href="category.php?category=sweets">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <section id="discount" data-aos="fade-up">
    <div class="container">
      <div class="discount__wrapper">
        <div class="discount__images">
          <div class="discount__img2">
            <img src="./images/cake1.jpg" style="mix-blend-mode: darken;" alt="Food img">
          </div>
        </div>
        <div class="discount__info">
          <h3 class="discount__text">20% OFF</h3>
          <h3 class="discount__title">Demo Foods For Discount</h3>
          <h3 class="discount__price">
          <p>#ice cake</p><span class="discount__oldPrice">&#8377;199</span>
            <span class="discount__newPrice">&#8377;179</span>
          </h3>
          <div class="discount__stars">
            <img src="./images/star.png" alt="stars" width="100%" height="200%" >
          </div>
          <a class="btn primary-btn" href="category.php?category=cakes">Shop Now</a>
        </div>
      </div>
    </div>
  </section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>