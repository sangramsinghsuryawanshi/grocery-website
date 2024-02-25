<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
 
    $select_message = $conn->prepare("SELECT * FROM `payment` WHERE name = ? AND email = ? AND number = ?");
    $select_message->execute([$name, $email, $number]);
 
    if($select_message->rowCount() > 0){
       $message[] = 'already sent message!';
    }else{
 
       $insert_message = $conn->prepare("INSERT INTO `payment`(user_id, name, email, number) VALUES(?,?,?,?)");
       $insert_message->execute([$user_id, $name, $email, $number]);
 
       $message[] = 'Payment successfully!';
 
    }
 
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment Form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/home12.css">
    <style>

.input_box img {
    max-width: 200px;
    height: auto;
    display: block;
    margin: 10px auto;
    transition: transform 0.3s ease;
}

.input_box img:hover {
    transform: scale(1.2);
}

        .input_box button {
            width: 100%;
            background-color: #21cdd3;
            border: none;
            color: #fff;
            padding: 15px;
            border-right: 4px;
            font-size: 16px;
            transition: all 0.3s ease;
            border-radius: 8px;
        }

        .input_box button:hover {
            cursor: pointer;
            background-color: #05b1a3;
        }
        .input_box a {
            width: 100%;
            border: none;
            padding: 15px;
            border-right: 4px;
            font-size: 16px;
            transition: all 0.3s ease;
            border-radius: 8px;
        }

        .input_box a:hover {
            cursor: pointer;
           text-decoration: underline;
           color: green;
        }
           
  


    </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="checkout-orders">
        
        <form action="" method="post">
            <h3>place your order</h3>
            <!--Account Information Start-->
            <h4>Personal information</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" name="name" placeholder="enter your name" class="box" required >
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="number" name="number" placeholder="enter your number" class="box" required>
                    <i class="fa fa-phone-square icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" name="email" placeholder="enter your email" class="box" required>
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                <img src="images/08d21b84-b18c-4be0-9c39-f9b5d6c743f2_GooglePay_QR.png" id="google-pay-qr" alt="Google Pay QR Code">
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <button type="submit" name="send">PAY NOW</button>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                   <center><a href="checkout.php">Go back</a></center>
                </div>
            </div>
    </section>


    <?php include 'footer.php'; ?>
</body>
</html>
