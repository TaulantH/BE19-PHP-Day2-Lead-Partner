<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        FirstName <input name="firstname" placeholder="name">
        LastName <input name="lastname" placeholder="name">
        <input type="submit">
    
    </form>
    <?php
    if( isset($_GET['submit']))
       {
           if( $_GET["firstname"] || $_GET["lastname"] )
           {
               echo "Welcome ". $_GET[ 'firstname']. "  " .$_GET['lastname'] ."<br/>";

           }
       }
       ?>
</body>
</html>