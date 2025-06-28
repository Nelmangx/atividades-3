<?php
    $num1 = $_GET["numero1"];
    
    if ($num1 % 2 == 0) {
        echo "O numero $num1 é par.";
    }else {
        echo "O numero $num1 é ímpar.";
    }

?>