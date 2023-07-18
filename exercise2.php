<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       function divide($num1, $num2) {
        $sum = $num1 / $num2;
        return $sum;
}
    $return_value = divide(10, 20);
    echo "Returned value from the function: $return_value";
    ?>
</body>
</html>