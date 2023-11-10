<?php
    $n = $_GET["n"];
    for($i=1; $i<=10; $i++) {
        $producto=$n*$i;
        echo "$n*$i=$producto\n";
    }
?>