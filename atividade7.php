<?php
/*Um organizador comprou um notebook por R$ 3.800,00 e pagou com
R$ 5.000,00. Calcule o valor do troco.
Resultado esperado: após pagar R$ 5.000,00 por um notebook de R$ 3.800,00,
o troco será de R$ 1.200,00.
*/


// Entradas - variáveis
$valorNotebook = 3800.00;
$valorPago = 5000.00;


// Processamento
$valorTroco = $valorPago - $valorNotebook;


?>



<!----------HTML---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>

<h3> Atividade 7</h3>

<p> Um organizador comprou um notebook por R$ 3.800,00 e pagou com
R$ 5.000,00. Calcule o valor do troco.
Resultado esperado: após pagar R$ 5.000,00 por um notebook de R$ 3.800,00,
o troco será de R$ 1.200,00.
 </p>

 <!--------- PHP -------->
<p> <?php  echo ("VALOR TROCO:" . $valorTroco );  ?></p>
    
</body>
</html>