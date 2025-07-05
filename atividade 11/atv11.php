<?php 

    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operador = $_POST["operador"];
    $resultado = "";
    
    switch ($operador) {
        case "soma":
            $resultado = $num1 + $num2;
            break;
        case "menos":
            $resultado = $num1 - $num2;
            break;
        case "vezes":
            $resultado = $num1 * $num2;
            break;
        default:
            $resultado = $num1 / $num2;
            break;
    }
    echo "O resultado é $resultado.";
?>