<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>

    <?php

        $nome = "Eduardo";
        $sobrenome = "Moreira";

        $idade = 21;
        $peso = 65.3;
        
        $doenca = false;

        $possuiDoenca = !$doenca ? "Não" : "Sim";

        const PAIS = "Brasil";

        
        echo "Muito prazer $nome $sobrenome! Você mora no " . PAIS . ". Sua idade é $idade, seu peso é $peso. Tem deficiência? $possuiDoenca";

    ?>

</body>
</html>