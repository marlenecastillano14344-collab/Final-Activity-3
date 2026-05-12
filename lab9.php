<form method="POST">

Message:
<br>

<textarea name="message">Hello po this is my PHP activity.</textarea>

<br><br>

<input type="submit">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "Message: " . htmlspecialchars($_POST["message"]);
}

?>
