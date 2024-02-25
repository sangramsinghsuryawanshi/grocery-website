<html>
<head>
<title>odd numbers 1 to 100</title>
</head>
<body> <form method="post"> enter the range:<br>
<input type="number" name="number" id="number">
<input type="submit" name="submit" id="submit">
</form> <?php if($_POST)
{
$number=$_POST['number'];
 echo "Odd numbers between 1 to 100 :- ";
     for ($j=1; $j<=$number; $j++)
{         if( $j%2!=0)
{         
echo $j.", ";
        }
    }
}
?>
</body>
</html>
