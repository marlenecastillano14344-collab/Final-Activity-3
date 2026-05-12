<!DOCTYPE html>
<html>
<body>

<form method="POST">

Name:
<input type="text" name="name" value="Marlene D. Castillano">
<br><br>

Email:
<input type="text" name="email" value="marlenecastillano14344@gmail.com">
<br><br>

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "Name: " . $_POST["name"] . "<br>";
    echo "Email: " . $_POST["email"];
}

?>

</body>
</html>
