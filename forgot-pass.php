<?php

@include 'config.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registerlogin1.css">
</head>
 <body>
        <section class="form-container">
             <form action="forgot-pass.php" method="POST" autocomplete="">
                <img src="download1.jpg" style="mix-blend-mode: darken;">
                    <h3>Forgot Password</h3>
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
                    <input type="email" name="email" class="box" placeholder="enter your email" required>
                    <input class="btn" type="submit" name="check-email" value="Continue">
            
             </form>
        </section>
    
</body>
</html>


