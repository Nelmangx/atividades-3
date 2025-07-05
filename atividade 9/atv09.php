<?php

    $salario = $_POST["salario"];

    if ($salario <= 1500) {
        echo "Seu salário receberá um ajuste de + 20%";

    } elseif ($salario >= 1501 and $salario <= 3000) {
        echo "Seu salário receberá um ajuste de + 15%";
        
    } else {
        echo "Seu salário receberá um ajuste de + 10%";
    }
?>