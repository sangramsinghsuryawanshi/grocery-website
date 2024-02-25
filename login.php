<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($rowCount > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/registerlogin1.css">
<style>
   .forget-pass{
    font-size: 14px;
    font-size: 15px;
    transform: translate(-35%, -50%);
    height: 10px;
    color: lawngreen;
}
.forget-pass a{
   color: red;
}
.forget-pass a:hover{
   text-decoration: underline;
   color: blue;
}
.policy-text {
  display: flex;
  margin-top: 14px;
  align-items: center;
}

.policy-text input {
  width: 14px;
  height: 14px;
  margin-right: 7px;
}
.policy-text a:hover{
   text-decoration: underline;
  color: darkred;
}
</style>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
   
<section class="form-container">

   <form action="" method="POST">
   <img src="download1.jpg" style="mix-blend-mode: darken;">
      <h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <!-- <div class="forget-pass"><a href="forgot-pass.php">Forgot password?</a></div>
      <div class="policy-text">
          <input type="checkbox" id="policy">
          <label for="policy">
            I agree the
            <a href="termcondition.php" class="option">Terms & Conditions</a>
          </label> -->
        </div>
      <input type="submit" value="login now" class="btn" name="submit">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</section>
<script script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

    <script>
		$('section').ripples({
			resolution: 512,
			dropRadius: 20, //px
			perturbance: 0.04,
		});
    </script>


</body>
</html>