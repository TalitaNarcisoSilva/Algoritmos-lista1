<?php
/*Uma empresa de eventos contratou três fornecedores. O buffet custou
R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
valor total gasto.
Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.
*/


// Entradas - variáveis
$valorBuffet = 8500.00;
$valorDecoracao = 2800.00;
$valorSonorizacao = 3200.00;

// Processamento
$custoTotal = $valorBuffet + $valorDecoracao + $valorSonorizacao;


?>



<!----------HTML---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>

<h3> Atividade 6</h3>

<p> Uma empresa de eventos contratou três fornecedores. O buffet custou
R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
valor total gasto.
Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.
 </p>

 <!--------- PHP -------->
<p> <?php  echo ("CUSTO TOTAL:" . $custoTotal );  ?></p>
    
</body>
</html>