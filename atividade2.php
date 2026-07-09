<?php
/* 
Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
valor total do buffet.
Resultado esperado: 120 convidados a R$ 85,00 precisam gerar um orçamento
de R$ 10.200,00. */
 

// Entradas / variáveis
$qtdConvidados = 120;
$valorBuffet = 85.00;



// Pocessamento
$orcamento = $qtdConvidados * $valorBuffet;



?>



<!----------HTML---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>

<h3> Atividade 2</h3>

<p> Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
valor total do buffet.
Resultado esperado: 120 convidados a R$ 85,00 precisam gerar um orçamento
de R$ 10.200,00.*/ </p>

<!--------- PHP -------->
<p> <?php echo ("ORÇAMENTO:" . $orcamento );  ?> </p>
    
</body>
</html>