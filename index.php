<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $days =12;
    if ($days <=7) {
        echo "6days new battlepass users";
    }
    else if ($days <= 24 ) {
        echo "battlepass enjoyer";
    }
    else if ($days <= 30 ) {
        echo "battlepass for-renewal";
    }
    else {
        echo "Invalid";
    }
    ?>
</body>
</html>