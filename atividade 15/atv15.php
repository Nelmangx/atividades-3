<?php

$valorVenda = $_POST["valor"];

if ($valorVenda <= 1000) {echo "<h1>A comissão é de 5%</h1>";}
elseif ($valorVenda >= 1001 and $valorVenda <= 5000) {echo "<h1>A comissão é de 10%</h1>";}
else {echo "<h1>A sua comissão é de 15%</h1>";}
?>