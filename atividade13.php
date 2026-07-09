<?php
/* 
Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
mostre o valor de cada prestação.
Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00.
 */

// Entradas - variáveis
$valorCamisa = 50.00;
$valorCalca = 120.00;
$valorTenis = 230.00;



// Processamento
$totalCompras = $valorCamisa + $valorCalca + $valorTenis;
$valorprestacoes = ($valorCamisa + $valorCalca + $valorTenis) / 5;


?>



<!--------- HTML--------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 13</title>
</head>
<body>

<h3> Atividade 13 </h3>

<p> Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
mostre o valor de cada prestação.
Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00.
</p>

<!--------- PHP -------->
<P> <?php echo ("VALOR TOTAL DE COMPRAS:" . $totalCompras); ?> <P>
<p> <?php echo ("VALOR DE 5 PRESTAÇÕES:" . $valorprestacoes ); ?> </p>
    
</body>
</html>