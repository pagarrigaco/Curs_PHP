<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical operators</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 8;

    if ($x>4 and $y>9){
        echo "Es compleixen les dos condicions. <br>";
    }else{
        echo "Una condició no es compleix <br>";
    }
    //AND - && S'han de complir X i Y => TRUE
    //OR - || Una de les dos es compleix => TRUE
    //XOR Només una de les dos es compleix => TRUE
    // 1 = TRUE - 0 = FALSE

    if ($x==5 xor $y==8){
        echo "Només una de les dues es compleix. <br>";
    }else{
        echo "Es compleixen les dues. <br>";
    }

    ?>
    
</body>
</html>