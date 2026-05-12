<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name:
    <input type="text" name="name" value="Marlene D. Castillano">
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   echo "Name: " . $_POST["name"];
}
?>

</body>
</html>
