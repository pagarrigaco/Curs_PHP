<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //EXERCICI 1
    //Crea dues variables, suma-les, multiplica el resultat per 5 i treu el resultat
    $x = 8;
    $y = 7;
    $z = ($x + $y) * 5;
    echo ("El resultat és: ".$z ."<br>");
    echo ("<br>");
    //EXERCICI2
    //Donat un preu i un IVA, indica el preu final
    $price = 100;
    $vat = 0.21;
    $totalPrice = ($price*$vat)+$price;
    echo ("El preu és de ".$price." euros, l'IVA és del ".$vat." % i el preu total queda en ".$totalPrice. " euros <br>");
    echo ("<br>");
    //EXERCICI 3
    //Fes la mitjana de tres números
    $a = 5;
    $b = 9;
    $c = 26;
    $average = ($a+$b+$c)/3;
    echo ("The average is ".number_format($average, 2, ',')."<br>"); #Decimals amb coma i no punt
    echo ("<br>");
    //EXERCICI 4
    //Donats cinc països i les seves capitals, treu la informació per pantalla
    $countries =array("Netherlands"=>"Amsterdam","Germany"=>"Berlin","Thailand"=>"Bagkok","France"=>"Paris","Italy"=>"Rome");
    foreach ($countries as $key => $value){
        echo ("The capital of ".$key." is ".$value."<br>");
    }
    echo ("<br>");
    //EXERCICI 5
    //Passa de centímetres a polzades
    $cm = 25;
    $cmToInch = 0.39;
    $inch = $cm * $cmToInch;
    echo ($cm." centímetres son ".$inch." polzades. <br>");
    echo ("<br>");
    //EXERCICI 6
    //Calcular despeses
    $expenses=array(125,35,96,2,58,696);
    $totalAmount = 0;
    $amountofExpenses =0;
    foreach ($expenses as $expense){
        $totalAmount += $expense;
        $amountofExpenses += 1;
    }
    echo ("El meu total de despeses d'aques mes és de: ".$totalAmount." i n'he fet un total de ".$amountofExpenses.".<br>");
    echo ("<br>");
    //EXERCICI 7
    //Informe meteorològic
    $weather= array("Rain","Sunshine","Clouds","Snow","Wind");
    echo ("We've senn all kinds of weather this month. At the begining of the month, we had ".$weather[4]."
     and ".$weather[3].". Then came ".$weather[0].".<br>");
    ?>
</body>
</html>