<?php
/* 
Faça um algoritmo que receba o valor de um produto, calcule um desconto de
9,5% e apresente o novo valor com desconto.
Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
desconto de R$ 19,00 e valor final de R$ 181,00.
 */

// Entradas - variáveis
$valorProduto = 200;
$valorDesconto = 9.5;


// Processamento
$desconto = $valorProduto * ($valorDesconto / 100);
$valorcomDesconto = $valorProduto - $desconto ;


?>



<!--------- HTML--------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 14</title>
</head>
<body>

<h3> Atividade 14 </h3>

<p> Faça um algoritmo que receba o valor de um produto, calcule um desconto de
9,5% e apresente o novo valor com desconto.
Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
desconto de R$ 19,00 e valor final de R$ 181,00.
</p>

<!--------- PHP -------->
<P> <?php echo ("VALOR DO PRODUTO:" . $desconto); ?> <P>
<p> <?php echo ("VALOR COM DESCONTO:" . $valorcomDesconto ); ?> </p>
    
</body>
</html>