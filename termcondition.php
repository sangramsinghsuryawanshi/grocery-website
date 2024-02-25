<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.terms-container {
    width: 70%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: transparent;
    text-align: center;
}

.checkbox-container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
}

.checkbox-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 350px;
    height: 25px;
    width: 25px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.checkbox-container:hover input ~ .checkmark {
    background-color: #f2f2f2;
}

.checkbox-container input:checked ~ .checkmark {
    background-color: #4caf50;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkbox-container input:checked ~ .checkmark:after {
    display: block;
}

.checkbox-container .checkmark:after {
    left: 10px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}

.buttons {
    margin-top: 20px;

}

button {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #4caf50;
    color: white;
}
.button {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #4caf50;
    color: white;
}
body {
    font-family: Arial, sans-serif;
    background: url(../images/vegetables-arrangement-with-copy-space.jpg) no-repeat;
    background-size: cover;
   background-position: center;
}

.section {
    margin-bottom: 20px;
}
h1{
    color: black;
}
h1:hover{
    text-decoration: underline;
}
h2 {
    color:blue; /* or any other color you prefer */
}
h2:hover{
    text-decoration: underline;
}

p {
    line-height: 1.6;
    margin: 10px 0;
}
p:hover{
    color: navy;
}

</style>
</head>
<body>
<div class="terms-container">
<center><img src="download1.jpg" style="mix-blend-mode: darken;"></center>
    <h1>Empire Foods Taste 2 Health Grocery Website Terms and Conditions:</h1>
    <p>Welcome to Empire Foods Taste 2 Health Grocery, your go-to destination for quality groceries and gourmet products. By accessing and using our website, you agree to comply with the following terms and conditions:</p> 
    <!-- Insert the terms and conditions here -->
    <div class="section">
    <h2>Product Information:</h2>
    <p>We aim to provide accurate product descriptions, but please note that we do not guarantee the accuracy, completeness, or reliability of any product information.</p>
</div>

<div class="section">
    <h2>Pricing and Payment:</h2>
    <p>Prices may change without prior notice. Payment is required before processing your order, and we accept various payment methods for your convenience.</p>
</div>

<div class="section">
    <h2>Shipping and Delivery:</h2>
    <p>While we strive for timely deliveries, please understand that delivery times can vary. We are not liable for any delays or damages during transit.</p>
</div>

<div class="section">
    <h2>Returns and Refunds:</h2>
    <p>You can return products within a specified period after receiving them. For detailed information, refer to our Returns and Refunds policy.</p>
</div>

<div class="section">
    <h2>User Conduct:</h2>
    <p>Kindly refrain from engaging in activities that may disrupt the website's functioning or compromise its security.</p>
</div>

<div class="section">
    <h2>Intellectual Property:</h2>
    <p>All content on our website, including logos, text, images, and software, is owned by Empire Foods Taste 2 Health Grocery and is protected by copyright and other intellectual property laws.</p>
</div>

<div class="section">
    <h2>Privacy:</h2>
    <p>Your privacy matters to us. We handle your personal information in line with our Privacy Policy.</p>
</div>

<div class="section">
    <h2>Modification of Terms:</h2>
    <p>We reserve the right to modify these terms and conditions without prior notice. Your continued use of the website after modifications indicates acceptance of the updated terms.</p>
</div>

<div class="section">
    <h2>Contact:</h2>
    <p>If you have any questions or concerns about these terms and conditions, please feel free to contact us using the provided contact information on the website.</p>
</div>

    <label class="checkbox-container">
        <input type="checkbox" id="accept-checkbox"> I accept the terms and conditions
        <span class="checkmark"></span>
    </label>

    <div class="buttons">
        <button id="accept-btn"><a href="login.php" >Accept</button></a>
        <button id="decline-btn"><a href="login.php" >Decline</button></a>
        <a href="login.php" class="button" >Go Back</a>
    </div>
</div>
<script>document.getElementById("accept-btn").addEventListener("click", function() {
    if (document.getElementById("accept-checkbox").checked) {
        alert("Terms and conditions accepted! And After going to login page please click on box button to accept condition");
        // Perform actions after accepting the terms and conditions
    } else {
        alert("Please accept the terms and conditions before proceeding.");
    }
});

document.getElementById("decline-btn").addEventListener("click", function() {
    alert("Terms and conditions declined. And do not press box to accept term and condition");
    // Perform actions after declining the terms and conditions (if any)
});
</script>

</body>
</html>