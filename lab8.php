<form method="POST">

Course:

<select name="course">
    <option>BSIT</option>
    <option>BSOA</option>
</select>

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "Selected Course: " . $_POST["course"];
}

?>
