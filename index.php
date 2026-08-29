<!DOCTYPE html>
<html>
<body>

<h2>PHP GET Method</h2>

<form method="GET" action="">
    Name:Llanos Jerica Faith M.
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    echo "Hello, " . $name . "!";
}
?>

</body>
</html>