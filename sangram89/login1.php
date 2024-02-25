<html>
<head>
<title>login page</title>
</head>
<body>
<form action="login1.php" method="post">

<input type="name" name="name" id="name" placeholder="enter your name">
<br><input  type="password" name="password" id="password" placeholder="enter your password">
<br><input type="submit" name="submit" id="submit" value="login">
</form>
<?php
if($_POST)
{
$name=$_POST['name'];
$password=$_POST['password'];
echo "your $name,and your pass is:$password";
}
?>
</body>
</html>