<?php

    $numero = $_POST["ddd"];
    $ddd1 = substr($numero, 0, 2);

    if ($ddd1 == 27) {echo "Seu DDD é $ddd1";}
    elseif ($ddd1 == 11) {echo "Seu DDD é $ddd1";}
    else {echo "Seu DDD é $ddd1";}
?>