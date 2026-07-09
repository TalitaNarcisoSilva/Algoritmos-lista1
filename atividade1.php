<?php
/* 
Uma empresa organiza eventos e cobra R$ 180,00 por participante. Crie
variáveis para armazenar a quantidade de participantes e calcule o valor total do
orçamento do evento.
Resultado esperado: 40 participantes a R$ 180,00 precisam gerar um orçamento
de R$ 7.200,00.
 */

// Entradas - variáveis
$qtdParticipantes = 40;
$valorIngresso = 180.00;

// Processamento
$orcamento = $qtdParticipantes * $valorIngresso;



?>



<!--------- HTML--------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 1</title>
</head>
<body>

<h3> Atividade 1 </h3>

<p> Uma empresa organiza eventos e cobra R$ 180,00 por participante. Crie
variáveis para armazenar a quantidade de participantes e calcule o valor total do
orçamento do evento.
Resultado esperado: 40 participantes a R$ 180,00 precisam gerar um orçamento
de R$ 7.200,00.</p>

<!--------- PHP -------->
<P> <?php echo ("ORÇAMENTO:" . $orcamento); ?> <P>

    
</body>
</html>