<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);
    $message = htmlspecialchars($_POST["message"]);

    if(empty($name) || empty($email)){
        echo "All fields are required!";
    }
    else{

        echo "<h2>Student Information</h2>";

        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Course: $course <br>";
        echo "Message: $message";
    }
}

?>

<form method="POST">

Name:
<input type="text" name="name" value="Marlene D. Castillano">
<br><br>

Email:
<input type="text" name="email" value="marlenecastillano14344@gmail.com">
<br><br>

Gender:
<input type="radio" name="gender" value="Female"> Female
<br><br>

Course:
    <input type="text" name="BSIT" value= </option>
<br><br>

<textarea name="message">
I am a beginner in PHP and I am still learning. I enjoy learning more abot PHP and I am excited to improve my skills as I continue practicing
</textarea>

<br><br>

<input type="submit">

</form>
