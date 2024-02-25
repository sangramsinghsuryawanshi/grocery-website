<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){
    $message[] = 'user email already exist!';
 }else{
    header('location:login.php');
 }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
           body {
            background-image: url('../images/top-view-vegetables-fruits-bag.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 400px;
            text-align: center;
            background:transparent;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px #777;
            transition: background-color 0.3s, transform 0.3s;
        }
        .container:hover {
            background-color: whitesmoke;
            transform: scale(1.02);
        }
        h2 {
            color: black; /* Neon Green */
        }
        p {
            margin: 10px 0;
            color: black;
        }
        input[type="text"] {
            background-color: #333;
            color: #fff;
            width: 40px;
            height: 40px;
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            text-align: center;
        }
        input[type="email"]{
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        input[type="email"]::placeholder, input[type="text"]::placeholder {
            color: #888;
        }
        button {
            background: black;
            color: wheat;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s, box-shadow 0.2s;
        }
        button:hover {
             background: linear-gradient(to bottom right, #00cc99, #009977);
            transform: scale(1.05);
            box-shadow: 0px 0px 20px 0px #00ffcc;
        }
        .otp-input {
            width: 40px;
            text-align: center;
            margin: 0 5px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            transition: background-color 0.3s, transform 0.3s;
        }

        .otp-input:hover {
            background-color: green; /* Darker color on hover */
            transform: scale(1.05); /* Slightly scale up on hover */
        }
        #status {
            font-weight: bold;
            margin-top: 10px;
            color: black;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <img src="download1.jpg" style="mix-blend-mode: darken;">
        <h2>Email Verification</h2>
        <p>Enter your email address to receive an OTP:</p>
        <input type="email" id="email" placeholder="Enter Email Address" required>
        <button onclick="sendOTP()">Send OTP</button>
        <div id="otpContainer" style="display: none;">
            <p>Enter OTP sent to your email:</p>
            <input type="text" id="otp" maxlength="6" class="otp-input" required>
            <input type="text" id="otp2" maxlength="6" class="otp-input" required>
            <input type="text" id="otp3" maxlength="6" class="otp-input" required>
            <input type="text" id="otp4" maxlength="6" class="otp-input" required>
            <button type="submit" name="submit" onclick="verifyOTP()">Verify OTP</button>
        </div>
        <p id="status"></p>
    </div>
   
    <script>
        let otpSent = false;
        let generatedOTP = "";

        function sendOTP() {
            const emailInput = document.getElementById("email");
            if (!emailInput.checkValidity()) {
                alert("Please enter a valid email address.");
                return;
            }

            // Simulate sending OTP (replace this with actual OTP sending logic)
            generatedOTP = generateOTP();
            alert(`OTP Sent: ${generatedOTP}`);
            otpSent = true;

            // Show OTP input fields
            document.getElementById("otpContainer").style.display = "block";
        }

        function verifyOTP() {
            if (!otpSent) {
                alert("Please send OTP first.");
                return;
            }

            const otp1 = document.getElementById("otp").value;
            const otp2 = document.getElementById("otp2").value;
            const otp3 = document.getElementById("otp3").value;
            const otp4 = document.getElementById("otp4").value;
            const enteredOTP = otp1 + otp2 + otp3 + otp4;

            // Simulate OTP verification (replace this with actual OTP verification logic)
            if (enteredOTP === generatedOTP) {
                document.getElementById("status").textContent = "OTP Verified. Email address is valid!";
                // Redirect to the login page after OTP verification
                window.location.href = "login.php";
            } else {
                document.getElementById("status").textContent = "OTP Verification Failed. Please try again.";
            }
        }

        function generateOTP() {
            // Simulated OTP generation (replace this with your OTP generation logic)
            const digits = '0123456789';
            let otp = '';
            for (let i = 0; i < 4; i++) {
                otp += digits[Math.floor(Math.random() * 10)];
            }
            return otp;
        }
    </script>
    
</body>
</html>
