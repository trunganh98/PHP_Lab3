<html>

<body>
<h3>Sign in</h3>
<form action="ex2.php" method="Get">
    Enter user name:
    <input type="text" name="name">
    Enter password
    <input type="text" name="pass">
    <input type="submit" value="Login" name="confirm">
</form>
</body>
</html>
<?php
$a = $_GET['pass'];
if($a == 'pass') {
    echo "You are a valid user";
}
else {
    exit('Sorry, you are an Invalid User.');
}
?>
