<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(empty($_POST["name"])){
        echo "Name is required<br>";
    }
    if(empty($_POST["email"])){
        echo "Email is required";
    }
}
  
?>
  
<form method="POST">

Name:
<input type="text" name="name">
<br><br>

Email:
<input type="text" name="email">
<br><br>

<input type="submit">

</form>
