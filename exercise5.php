<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function convert($total_minutes) {
        $hours = (int) ($total_minutes / 60);
        $minutes = $total_minutes % 60;
    
        return "{$total_minutes} minutes = {$hours} hour(s) and {$minutes} minute(s).";
    }
    
    // Test the function
    $minutes = 200;
    echo convert($minutes);
    ?>
</body>
</html>