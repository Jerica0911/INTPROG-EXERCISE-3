```php
<!DOCTYPE html>
<html>
<body>

<h2>PHP POST Method</h2>

<form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST["submit"])) {
    echo "Hello, " . $_POST["name"];
}
?>

</body>
</html>
```
