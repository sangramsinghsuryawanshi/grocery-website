<?php
session_start();

// Check if the counter is already set in the session, if not, initialize it to 0
if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 0;
}

// Increment the counter
$_SESSION['visitor_count']++;
?>

<!DOCTYPE html>
<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .visitor-count {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .visitor-count h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .visitor-count p {
            margin: 0;
        }
    </style>
    <title>Visitor Count</title>
</head>
<body>
    <h1>Welcome to Our Website</h1>
    <p>This is our amazing website. Thank you for visiting!</p>
    <div>
        <h2>Visitor Count</h2>
        <p>Total number of visitors: <?php echo $_SESSION['visitor_count']; ?></p>
    </div>
</body>
</html>
