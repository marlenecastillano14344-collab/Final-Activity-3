<form action="process.php" method="POST">

Name:
<input type="text" name="name">

<input type="submit">

</form>
 
<?php

echo  "Name: " . $_POST["name"];

?>
