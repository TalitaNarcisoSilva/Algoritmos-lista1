<?php
/*Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00.*/


// Entradas - variáveis
$valorServico = 4500.00;
$porcentagemDesconto = 10;

// Processamento
$valorDesconto = ($valorServico * $porcentagemDesconto) /100;


?>



<!----------HTML---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>

<h3> Atividade 5</h3>

<p> Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00. </p>

<!--------- PHP -------->
<p> <?php  echo ("VALOR DESCONTO:" . $valorDesconto );  ?></p>
    
</body>
</html>