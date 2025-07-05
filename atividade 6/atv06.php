<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 > $numero2) {
        echo "O numero $numero1 é maior que o $numero2.";
    } else {
        echo "O numero $numero2 é maior que o $numero1.";
    }
?>