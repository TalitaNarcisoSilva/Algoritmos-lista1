<?php
/*Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
participantes de uma competição. Calcule quantos brindes cada equipe
receberá.
Resultado esperado: 500 brindes divididos entre 25 equipes resultam em 20
brindes para cada equipe.
*/


// Entradas - variáveis
$qtdBrindes = 500;
$qtdEquipes = 25;


// Processamento
$qtdBrindesEquipe = $qtdBrindes / $qtdEquipes ;

?>



<!----------HTML---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>

<h3> Atividade 8</h3>

<p> Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
participantes de uma competição. Calcule quantos brindes cada equipe
receberá.
Resultado esperado: 500 brindes divididos entre 25 equipes resultam em 20
brindes para cada equipe.
 </p>

 <!--------- PHP -------->
<p> <?php  echo ("QUANTIDADE DE BRINDES:" . $qtdBrindesEquipe );  ?></p>
    
</body>
</html>