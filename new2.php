<?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if(!empty($num1)){
        echo "ตัวเลขที่ 1 : ";
        echo $num1."<br><br>";
    }
    if(!empty($num2)){
        echo "ตัวเลขที่ 2 : ";
        echo $num2."<br><br>";
    }
    if(!empty($num3)){
        echo "ตัวเลขที่ 3 : ";
        echo $num3."<br><br>";
    }



?>