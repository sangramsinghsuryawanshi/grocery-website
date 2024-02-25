<?php
session_start();

// Check if the user is not logged in and redirect to index.php
if (!isset($_SESSION['user_id'])) {
    header("Location: index1.php");
    exit();
}

// Check if the form is submitted for sign-out
if (isset($_POST['signout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect back to the sign-in page
    header("Location: index1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <form method="post" action="">
            <input type="submit" name="signout" value="Sign Out">
        </form>
    </div>
</body>
</html>
