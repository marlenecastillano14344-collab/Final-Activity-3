<form method="POST"
action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name:
<input type="text" name="name">

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo htmlspecialchars($_POST["name"]);
}

?>
