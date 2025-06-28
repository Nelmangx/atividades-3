<?php
    $aluno = $_GET["aluno"];
    $nota1 = $_GET["nota1"]; 
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media <= 5) {
        echo "O aluno $aluno foi reprovado, com as notas: <br>No primeiro Semestre $nota1;<br>No seguno semestre $nota2;<br>E no terceiro semestre $nota3.";
    }elseif($media > 5 && $media <= 6.9) {
        echo "O aluno $aluno está de recuperação, com as notas: <br>No primeiro Semestre $nota1;<br>No seguno semestre $nota2;<br>E no trceiro semestre $nota3.";
    }else {
        echo "Parábens ao aluno $aluno passou de ano, com as notas: <br>No primeiro Semestre $nota1;<br>No seguno semestre $nota2;<br>E no terceiro semestre $nota3.";
    }
?>