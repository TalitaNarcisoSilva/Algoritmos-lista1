<?php
/* 
Faça um algoritmo que realize uma operação cambial. O turista deve informar
o valor que possui em reais e a cotação do dólar naquele dia. O algoritmo deverá
converter o valor para dólares.
Resultado esperado: com R$ 500,00 e cotação do dólar a R$ 5,00, o turista terá
US$ 100,00.
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

<p> Faça um algoritmo que realize uma operação cambial. O turista deve informar
o valor que possui em reais e a cotação do dólar naquele dia. O algoritmo deverá
converter o valor para dólares.
Resultado esperado: com R$ 500,00 e cotação do dólar a R$ 5,00, o turista terá
US$ 100,00.

</p>

<!--------- PHP -------->
<P> <?php echo ("VALOR DO PRODUTO:" . $desconto); ?> <P>
<p> <?php echo ("VALOR COM DESCONTO:" . $valorcomDesconto ); ?> </p>
    
</body>
</html>