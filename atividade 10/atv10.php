<?php

    $nota = $_POST["nota"];

    if ($nota == 10 or $nota == 9) {
        echo "Sua nota é A";

    }elseif ($nota == 7 or $nota == 8.9) {
        echo "Sua nota é B";

    }elseif ($nota == 5 or $nota == 6.9) {
        echo "Sua nota é C";

    }elseif ($nota == 3 or $nota == 4.9) {
        echo "Sua nota é D";

    }else {
        echo "Sua nota é E";
    }
?>