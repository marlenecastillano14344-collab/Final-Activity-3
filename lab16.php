<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $age = $_POST["age"];

    if(is_numeric($age) && $age >= 1 && $age <= 100){

        echo "Valid Age";
    }
    else{

        echo "Invalid Age";
    }
}

?>

<form method="POST">

Age:
<input type="number" name="age" value="19">

<input type="submit">

</form>
