<?php
    $idade = $_POST["idade"];

    if ($idade <= 12) {
        echo "CRIANÇA";
    } elseif ($idade >= 13 and $idade <= 17) {
        echo "ADOLESCENTE";
    } elseif ($idade >= 18 and $idade <= 59) {
        echo "ADULTO";
    } else {
        echo "IDOSO";
    }
?>