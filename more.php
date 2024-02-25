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

<section class="about-sec section" id="about">
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(images/restaurant\ 1.jpg);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/pexels-nicole-michalou-5747353 (2160p).mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Watch Video</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

<div class="gallary" id="Gallary">
        <h1>Our<span>restaurants</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="images/restaurant 1.jpg">
            </div>

            <div class="gallary_image">
                <img src="images/restaurant 2.png">
            </div>

            <div class="gallary_image">
                <img src="images/restaurant 3.jpg">
            </div>

            <div class="gallary_image">
                <img src="images/restaurant 4.png">
            </div>

            <div class="gallary_image">
                <img src="images/restaurant 5.jpg">
            </div>

            <div class="gallary_image">
                <img src="images/empire.jpg">
            </div>

        </div>

    </div>
<section>

   <div class="team">
   <center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
        <h1><span>Owner</span></h1>
        <div class="team_box">
            <div class="profile">
                <img src="images/sang.jpg">

                <div class="info">
                    <h4 class="name1">Sangram Suryawanshi</h4>
                    <p class="bio">"Meet the visionary behind the Empire Foods, a culinary innovator dedicated to crafting extraordinary dining experiences that tantalize taste buds and redefine gastronomy."</p>

                    <div class="team_icon">
                     <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
                     <a href="https://twitter.com/login"> <i class="fab fa-twitter"></i></a>
                     <a href="https://www.instagram.com/?hl=en"> <i class="fab fa-instagram"></i></a>
                   </div>

                </div>

            </div>

            <div class="profile">
                <img src="images/harsh.jpg">

                <div class="info">
                    <h4 class="name1">Harshad Pawar</h4>
                    <p class="bio">"Meet the visionary behind the Empire Foods,Culinary visionary leading epicurean experiences, redefining gastronomy with innovation."</p>

                    <div class="team_icon">
                     <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
                     <a href="https://twitter.com/login"> <i class="fab fa-twitter"></i></a>
                     <a href="https://www.instagram.com/?hl=en"> <i class="fab fa-instagram"></i></a>
                   </div>  

                </div>

            </div>

        </div>

    </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>