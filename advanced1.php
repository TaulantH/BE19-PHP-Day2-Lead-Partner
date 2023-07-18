<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 18rem;
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
        <label for="fahrenheit">Fahrenheit Temperature:</label>
        <input type="number" id="fahrenheit" name="fahrenheit" required><br>
        <input type="submit" value="Convert">
    </form>
<div class="card" style="width: 18rem;">
    <?php
    function fahrenheit_to_celsius($fahrenheit) {
        $celsius = ($fahrenheit - 32) * (5 / 9);
        return $celsius;
    }


    $fahrenheit = $_POST["fahrenheit"];
    $celsius = fahrenheit_to_celsius($fahrenheit);
    echo "<div class='card'>";
    echo "{$fahrenheit}°F is equal to {$celsius}°C. <br>";

    $temperature_category = "";
    if ($celsius <= 5) {
        $temperature_category = "To cold";
        $image_path = "cold1.jpg";
    } elseif ($celsius <= 10) {
        $temperature_category = "Cold";
        $image_path = "cold.jpg";
    } elseif ($celsius <= 15) {
        $temperature_category = "Pleasant";
        $image_path = "pleasant.jpg";
    } elseif ($celsius <= 20) {
        $temperature_category = "Warm";
        $image_path = "warm.jpg";
    } else {
        $temperature_category = "Hot";
        $image_path = "hot.png";
    }

    echo "Temperature Category: " . $temperature_category;
    ?>

    <img src="<?php echo $image_path; ?>" class="card-img-top" alt="...">
    <div class="card-body"></div>
</div>

</body>
</html>
