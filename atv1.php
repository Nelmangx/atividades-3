<?php

    $num1 = $_GET["numero1"];
    $num2 = $_GET["numero2"];


    if ($num1 == 0) {
        echo "O $num1 é um numero neutro <br>";
        if ($num2 > 0) {
            echo "E o $num2 é positivo";
        }elseif ($num2 < 0) {
            echo "E o $num2 é negativo";
        }

    }elseif ($num2 == 0) {
        echo "O $num2 é um numero neutro <br>";
        if ($num1 > 0) {
            echo "E o $num1 é positivo";
        }elseif ($num1 < 0) {
            echo "E o $num1 é negativo";
        }

    }elseif ($num1 ==0 && $num2 == 0) {
        echo "Os numeros 1 e 2 são numeros neutros.";

    }elseif ($num1 <= -1 || $num2 <= -1){
        echo "Os numeros $num1 e $num2 são negativos";

    } else {
        echo "Os numeros $num1 e $num2 são possitivos";
    }
?>
