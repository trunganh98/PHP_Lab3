<html>

<body>
<b>Multiplication of two Numbers</b>
<form action="ex1.php" method="get">
    Enter the second number
    <input type="text" name ="n1text">
    <br>
    <br>
    Enter the second number
    <input type="text" name ="n2text">
    <br>
    <input type="submit" value="Submit">
    <br>
</form>
</body>
</html>
<?php

$a = $_GET["n1text"];
$b = $_GET["n2text"];
$c = $a * $b;
echo "The product of two numbers is $c";
?>

