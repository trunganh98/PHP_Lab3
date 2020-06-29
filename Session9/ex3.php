<html>

<body>
<h3>Check ur Grade:</h3>
<form action="ex3.php" method="get">
    Enter ur Percentage
    <input type="text" name="name">
    <input type="submit" name="grade" value="submit">
</form>
</body>
</html>
<?php
$a = $_GET['name'];
if($a > 60) {
    echo "Congrats!";
}
else if($a <60 && $a > 40) {
    echo "Congrats!";
}
else {
    echo "Sorry. You have failed.";
}
?>
