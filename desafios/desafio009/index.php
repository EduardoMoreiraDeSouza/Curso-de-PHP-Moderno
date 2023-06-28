<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 009 - Médias Aritméticas</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php


        $valor1 = $_POST['valor1'] ?? 0;
        $peso1 = $_POST['peso1'] ?? 1;
        
        $valor2 = $_POST['valor2'] ?? 0;
        $peso2 = $_POST['peso2'] ?? 1;


    ?>

    <header>
        <h1>Médias Aritméticas</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" step="0.1">
            
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" step="0.1">

            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" step="0.1">
            
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" step="0.1">


            <input type="submit" value="Analisar">

        </form>

    </main>

    <section>

        <h2>Cálculo das Médias</h2>

        <?php

            $mediaSimples = number_format(($valor1 + $valor2) / 2, 2, ',', '.');
            $mediaPonderada = number_format(($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2), 2, ',', '.');

            print "
                <p>Analisando os valores <strong>$valor1</strong> e <strong>$valor2</strong>:</p>
                <p>A <strong>média aritmética simples</strong> entre os valores é igual a <strong>$mediaSimples</strong>.</p>
                <p>A <strong>média aritmética ponderada</strong> entre os valores é igual a <strong>$mediaPonderada</strong>.</p>
            ";

        ?>

    </section>
    
</body>
</html>

