<form method="POST">

Gender:

<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female

<br><br>

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "Selected Gender: " . $_POST["gender"];
}

?>
