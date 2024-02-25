<html>
<body>
<form action="login.php" method="post">   
<table>   
<tr><td>Name:</td><td> <input type="text" name="name"/></td></tr>  
<tr><td>Password:</td><td> <input type="password" name="password"/></td></tr>   
<tr><td colspan="2"><input type="submit" value="login"/>  </td></tr>  
</table>  
</form>   <?php if($_POST)
{ 
$name=$_POST['name']; 
$password=$_POST['password'];
  
echo "Welcome: $name, your password is: $password";  
}
?>  
</body>
</html>
