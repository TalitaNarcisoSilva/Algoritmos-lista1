<?php
/* 
Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
resultado na tela. (Pesquise a fórmula)
Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.
 */

// Entradas - variáveis
$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$nota4 = 9;

// Processamento
$mediaNotas = ($nota1 + $nota2 + $nota3 + $nota4) /4;



?>



<!--------- HTML--------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 12</title>
</head>
<body>

<h3> Atividade 12 </h3>

<p> Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
resultado na tela. (Pesquise a fórmula)
Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.</p>

<!--------- PHP -------->
<P> <?php echo ("MEDIA DE NOTAS:" . $mediaNotas); ?> <P>

    
</body>
</html>