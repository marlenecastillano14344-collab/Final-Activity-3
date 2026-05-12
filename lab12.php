<form method="POST">

Name:
<input type="text" name="name"
value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">

<input type="submit">

</form>
