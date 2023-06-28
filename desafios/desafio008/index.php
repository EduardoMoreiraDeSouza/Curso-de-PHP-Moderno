<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 008 - Raízes de um Número</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php

        $numero = $_POST['numero'] ?? 0;

    ?>

    <header>
        <h1>Informe um Número:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular Raízes">

        </form>

    </main>

    <section>

        <h2>Resultado Final</h2>

        <?php

            $raizQuadrada = number_format(sqrt($numero), 4, ',', '.');
            $raizCubica = number_format($numero ** (1/3), 4, ',', '.');

            print "
                <p>Analisando o <strong>número $numero</strong>, temos:</p>
                <p>A sua raiz quadrada é $raizQuadrada</p>
                <p>A sua raiz cúbica é $raizCubica</p>
            ";

        ?>

    </section>
    
</body>
</html>

