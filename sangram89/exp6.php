<html>
<head>
<title>to check number is prime or not</title>
</head>
<body> <form method="post"> enter the number:<br>
<input type="number" name="number" id="number">
<input type="submit" name="submit" id="submit">
</form> <?php if($_POST)
{
$prime=1;
$num=$_POST['number']; for($i=2;$i<$num;$i++)
{
if($num%$i==0)
{
$prime=0; break;
}
}
if($prime==1)
{
echo"number is prime";
}
else
{
echo"number is not prime";
}}
?>
</body>
</html>
