<?php
    $senhaFixa = "yuritailan123";
    $senhaCorreta = $_POST["senha"];

     if ($senhaCorreta === $senhaFixa) {
            echo "Sua senha está correta.";
        } else {
            echo " Sua senha está incorreta.<br> $senhaVerificar";
        };
    
?>