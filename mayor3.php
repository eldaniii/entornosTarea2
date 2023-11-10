<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if ($num1>$num2) {
        if ($num1>$num3) echo "El número mayor es: $num1";
        else echo "El número mayor es: $num3";
    }
    else {
        if ($num2>$num3) echo "El número mayor es: $num2";
        else echo "El número mayor es: $num3";
    }
?>