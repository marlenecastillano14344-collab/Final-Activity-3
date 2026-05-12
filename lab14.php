<form method="POST">

Hobbies:

<input type="checkbox" name="hobbies[]" value="Reading"> Reading
<input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
<input type="checkbox" name="hobbies[]" value="Watching Movies"> Watching Movies

<br><br>

<input type="submit">

</form>

<?php

if(isset($_POST["hobbies"])){

    echo "Selected Hobbies: <br>";

    foreach($_POST["hobbies"] as $hobby){

        echo $hobby . "<br>";
    }

}

?>
