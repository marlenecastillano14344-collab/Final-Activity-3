<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST["name"]);

    echo "Name: " . $name;
}

?>

<form method="POST">

Name:
<input type="text" name="name" value="Marlene D. Castillano">

<input type="submit">

</form>
