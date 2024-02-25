<html>
<head>
<title>factorial number</title>
</head>
<body>
<form method="post">
Enetr number:<br>
<input type="number" name="number" id="number">
<input type="submit" name="submit" id="submit">
</form>
<?php
if($_POST)
{
$fact=1;
$number=$_POST['number'];
for($i=1;$i<=$number;$i++)
{
$fact*=$i;
}
echo"factorial is=$fact";
}
?>
</body>
</html>


