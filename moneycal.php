<?php
    
    $money = $_GET['money'];
    $x = $money;
    $b1000 =  floor(($money / 1000));
    $money = $money - $b1000 * 1000;
    $b500  = floor($money / 500);
    $money = $money - $b500 * 500;
    $b100  = floor($money / 100);
    $money = $money - $b100 * 100;
    $b10  = floor($money / 10);
    $money = $money - $b10 * 10;
    $b5  = floor($money / 5);
    $money = $money - $b5 * 5;
    echo "MONEY :$x";
    echo "<br>";
    if ($b1000 != 0) {
        echo "1000B :$b1000";
        echo "<br>";
    }

    if ($b500 != 0) {
        echo "500B :$b500";
        echo "<br>";
    }

    if ($b100 != 0) {
        echo "100B :$b100";
        echo "<br>";
    }

    if ($b10 != 0) {
        echo "10B :$b10";
        echo "<br>";
    }

    if ($b5 != 0) {
        echo "5B :$b5";
        echo "<br>";
    }

    if ($money != 0){
        echo "1B :$money";
        echo "<br>";
    }
    echo "<a href = 'money.php'>back</a>";
    
    ?>