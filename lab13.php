<form method="POST">

Password:
<input type="password" name="password">

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "Password submitted successfully.";
}

?>
