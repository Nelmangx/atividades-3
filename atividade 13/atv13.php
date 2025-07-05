<?php 

    $idadeUsuario = $_POST["idade"];
    $idade = 18;
    if ($idadeUsuario <= $idade) {echo "A idade é $idadeUsuario. Acesso negado.";}
    else {echo "Sua idade é $idadeUsuario. Acesso permitido";}
?>