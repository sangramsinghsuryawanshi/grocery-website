<?php
include_once('user/includes/dbconnection.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Jawahar Lal Nehru College Dehri-on-sone</title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>

</head>

<body>
    
    <section class="main" style="background-image: url(images/hero-bg.png); height:100vh;">
        
        <nav>
            <a href="#" class="logo">
                <img src="images/logo.png" class="image1" width="320px" />
                
                <img src="https://1.bp.blogspot.com/-zeWCdTyFgZ4/YMhnzVchAlI/AAAAAAAAFaA/aWBlSPn-kSEsRVVi-LmAqoDHIzsG7JoaQCLcBGAsYHQ/s0/logo.png" class="image2" width="60px" height="60px" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="#">About</a></li>
                <li><a href="#">Notification</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a class="active" href="user/signup.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">Sign Up</a></li>
                <li><a class="active" href="user/login.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">sign in</a></li>
            </ul>
        </nav>
       
    


        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">Welcome to JLN College</h3>
                <h1 style="color: white;"> Student Portal</h1>
                <p style="color: white;">Jawaharlal Nehru college provides a student centre of learning environment with close student faculty interaction and constant participation. The Principal mission of our college is to achieve success.</p>
            <!--login-btn-->
            <a href="user/signup.php" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/hero.png" width="500px" style="text-shadow: 20px 22px;"/>
               
                     

            </div>
            
        </div>
        
        
    </section>
   <!--LATEST NOTIFICATION START -->
     <section class="notification">

                         <hr>
<marquee behavior="alternate" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
    <?php $query=mysqli_query($con,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>

    <a href="notice-details.php?nid=<?php echo $row['ID'];?>" target="_blank"><?php echo $row['Title'];?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    
    <?php } ?>
    
    
</marquee>

        
    </section>
    <hr>
    <!--LATEST NOTIFICATION END-->
    <!--services----------------------->
    <section class="services" id="courses">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR PROFESSIONAL COURSES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Batchlor of Computer Application</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="user/signup.php">Apply Now</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Batchlor of Business Administration</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="user/signup.php">Apply Now</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Bio-Technology</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="user/signup.php">Apply Now</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="user/signup.php">Apply Now</a>
            </div>
            <!--box-1-------->
            
        </div>
    </section>
   
    <!--footer------------->
    <footer>
        <p>Copyright (C) - 2021 | Developed By <a href="https://codingcush.blogspot.com/">Coding Cush </a> </p>
    </footer>
</body>

</html>
