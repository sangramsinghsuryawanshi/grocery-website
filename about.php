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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- for icons  -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home12.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/a2.jpg" style="mix-blend-mode: darken;" width="550px" alt="">
         <h3>why choose us?</h3>
         <p>Online grocery websites often have features like saved shopping lists, personalized recommendations, and quick reorder options. These features streamline your shopping experience and make it easy to find your preferred items.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/main_img.png" alt="">
         <h3>what we provide?</h3>
         <p>We are dedicated to providing our customers with the freshest and highest quality vegetables, fruits, meat, and fish, as well as indulgent treats like sweets, cakes, cold drinks, and ice cream. We believe that a healthy and balanced diet not only includes wholesome ingredients, but also moments of pure indulgence, and we are committed to satisfying all your cravings with our delectable range of desserts and refreshing beverages.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
<section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/testimonial-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Nilay Hirpara
                                                </h3>
                                                
                                                <p>
                                                    "Empire Foods' Gourmet Grub Haven exceeded my expectations. From the moment I walked in, the ambiance was inviting, and the service was impeccable.
                                                    The menu offered an array of flavors that took my taste buds on a journey around the world. I opted for their signature dish, and it was a symphony of textures and tastes, leaving me craving more. Each bite felt like a celebration of culinary artistry and innovation. The attention to detail was evident in every plate. 
                                                    The freshness of the ingredients showcased their commitment to quality. This restaurant is a treasure for food enthusiasts seeking an extraordinary dining experience. I'm already planning my next visit."
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t2.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Ravi Kumawat
                                                </h3>
                                                <p>
                                                    "Empire Foods is a culinary gem! The diverse menu caters to every palate, and their commitment to health shines through each dish. 
                                                    I was pleasantly surprised by the vibrant flavors and innovative combinations. 
                                                    The staff's warmth and knowledge about ingredients made my dining experience exceptional. 
                                                    From gluten-free to vegan, Empire Foods delivers on taste without compromising on nutrition. 
                                                    I left feeling nourished and satisfied, eager to return for more."
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t3.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Navnit Kumar
                                                </h3>
                                                <p>
                                                    "What a delightful find! Empire Foods' organic offerings are a breath of fresh air in the dining scene. 
                                                    The quality and taste of the ingredients are evident in every bite. 
                                                    The farm-to-table concept is beautifully executed, and I appreciate their efforts towards sustainability. 
                                                    Whether you're a health enthusiast or simply seeking great food, this restaurant exceeds expectations. 
                                                    The ambiance is cozy and inviting, making it a perfect spot for a mindful meal. Highly recommended!"
                                                </p>
                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Somyadeep Bhowmik
                                                </h3>
                                                <p>
                                                    "Empire Foods is my go-to place for guilt-free indulgence. 
                                                    Their fusion of flavors takes me on a global culinary journey with every visit. 
                                                    I love the attention they pay to dietary preferences - their vegan options are a revelation! 
                                                    The presentation is as appealing as the taste, making dining here a truly immersive experience.
                                                    The staff's knowledge about the menu is commendable, and they're always willing to customize dishes. 
                                                    If you're looking for a restaurant that combines health and taste flawlessly, look no further."
                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




<?php include 'footer.php'; ?>

    
    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    

<script src="js/script.js"></script>

</body>
</html>