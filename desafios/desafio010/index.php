<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 010 - Cálculo de Idade</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php

        date_default_timezone_set('America/Sao_Paulo');

        $anoAtual = date('Y');
        $anoNascimento = $_POST['anoNascimento'] ?? 0;
        $anoPretendido = $_POST['anoPretendido'] ?? $anoAtual;


    ?>

    <header>
        <h1>Calculando a Sua Idade</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>">

            <label for="anoPretendido">Quer saber sua idade em que ano?</label>
            <input type="number" name="anoPretendido" id="anoPretendido" value="<?=$anoPretendido?>" min="<?=$anoNascimento?>">
            

            <input type="submit" value="Analisar">

        </form>

    </main>

    <section>

        <h2>Resultado</h2>

        <?php

            $idade = $anoPretendido - $anoNascimento;

            print "
                <p>Quem nasceu em $anoNascimento vai ter <strong>$idade</strong> em $anoPretendido</p>
            ";

        ?>

    </section>
    
</body>
</html>

