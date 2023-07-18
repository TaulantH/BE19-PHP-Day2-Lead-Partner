<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        .green-text {
            color: green;
        }

        .red-text {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $hobbies = $_POST["hobbies"];
    }
    ?>

    <form action="" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required value="<?php echo isset($firstname) ? $firstname : ''; ?>"><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname"><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br>

        <label for="hobbies">Hobbies:</label>
        <input type="text" id="hobbies" name="hobbies"><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div>";
        echo "First Name: ";
        if (strlen($firstname) > 5) {
            echo "<span class='green-text'>$firstname</span>";
        } else {
            echo "<span class='red-text'>$firstname</span>";
        }
        echo "<br>";

        echo "Last Name: $lastname";
      
        echo "<br>";

        echo "Age: $age<br>";

        if (!empty($hobbies)) {
            echo "Hobbies: $hobbies<br>";
        }

        echo "</div>";
    }
    ?>
</body>
</html>
