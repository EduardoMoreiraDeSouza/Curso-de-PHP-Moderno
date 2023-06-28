<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulários Retroalimentados</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>

<body>

    <?php

        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;

    ?>

    <main>

        <h2>Soma de dois valores</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <input type="submit" value="Somar">

        </form>

    </main>

    <section id="resultado">

        <h2>Resultado</h2>

        <?php

            $soma = $valor1 + $valor2;

            print "<p>A soma entre os valores $valor1 e o $valor2 <strong>é $soma<p></strong>";

        ?>

    </section>

    <?php


    ?>
    
</body>
</html>