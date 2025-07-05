<?php 

    $estrela = $_POST["avaliacao"];

        if ($estrela == 5) { echo "<h1>Excelente</h1>"; }
    elseif ($estrela == 4) { echo "<h1>Muito bom</h1>"; }
    elseif ($estrela == 3) { echo "<h1>Bom</h1>"; }
    elseif ($estrela == 2) { echo "<h1>Ruim</h1>"; }
    else { echo "<h1>Péssimo</h1>"; }
?>