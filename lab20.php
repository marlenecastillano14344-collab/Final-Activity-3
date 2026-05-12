<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);
    $message = htmlspecialchars($_POST["message"]);

    if(empty($name) || empty($email)){

        echo "Name and Email are required!";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        echo "Invalid Email!";
    }

    else{

        echo "<h2>Student Registration Form</h2>";

        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Course: $course <br>";

        if(isset($_POST["hobbies"])){

            echo "Hobbies: ";

            foreach($_POST["hobbies"] as $hobby){

                echo $hobby . " ";
            }
        }

        echo "<br>";
        echo "Message: $message";
    }
}

?>

<form method="POST">

Name:
<input type="text" name="name"
value="Marlene D. Castillano" required>

<br><br>

Email:

<input type="text" name="email"
value="marlenecastillano14344@gmail.com" required>

<br><br>

Gender:

<input type="radio" name="gender" value="Female" checked> Female
<input type="radio" name="gender" value="Male"> Male

<br><br>

Course:

<select name="course">
<option selected>BSIT</option>
<option>BSOA</option>
</select>

<br><br>

Hobbies:

<input type="checkbox" name="hobbies[]" value="Playing Online Games"> Playing Online Games
<input type="checkbox" name="hobbies[]" value="Painting"> Painting
<input type="checkbox" name="hobbies[]" value="Watching K-Drama"> Watching K-Drama

<br><br>

Message:
<br>

<textarea name="message">
Hello, this is Marlene. I am still a beginner in PHP, but I am trying my best and I am willing to learn more about PHP.
</textarea>

<br><br>

<input type="submit">
<input type="reset">

</form>
