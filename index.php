<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Numbers</title>
</head>
<body>
    <?php
    $i = 2;
    echo "Odd numbers from 2 to 20:<br>";
    do {
        if ($i % 2 != 0) {
            echo "$i<br>";
        }
        $i++;
    } while ($i <= 20);
    ?>
   
</body>
</html>