<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $email = $_POST["email"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Valid Email";
    }
    else{
        echo "Invalid Email";
    }
}

?>

<form method="POST">

Email:
<input type="text" name="email" value="marlenecastillano14344@gmail.com">
  
<input type="submit">

</form>
