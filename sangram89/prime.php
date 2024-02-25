<html>
<head>
<title>prime number</title>
</head>
<body>
<form method="post">
enet num:<br>
<input type="number"
<input type="number" name="number" id="number">
<input type="submit" name="submit" id="submit">
</form>
<?php
if($_POST)
{
$num=$_POST['number'];
for($i=1;$i<=$num;$i++)
{
if($i%2!=0)
{
echo $i.",";
}
}
}
?>
</body>
</html>