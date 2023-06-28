<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 013 - Caixa Eletrônico</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php

        $valorSaque = $_POST['valorSaque'] ?? 0;
        $valorSaqueFormatado = number_format($valorSaque, 2, ',', '.');

    ?>

    <header>
        <h1>Caixa Eletrônico:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="valorSaque">Qual o valor que você deseja sacar? (R$)*</label>
            <input type="number" name="valorSaque" id="valorSaque" value="<?=$valorSaque?>" step="5">

            <p>Notas disponíveis: R$200, R$100, R$50, R$20, R$10 e R$5</p>

            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>

        <h2>Saque de R$<?=$valorSaqueFormatado?> realizado</h2>

        <?php

            $notas100 = intdiv($valorSaque, 100);
            $valorSaque -= $notas100 * 100;

            $notas50 = intdiv($valorSaque, 50);
            $valorSaque -= $notas50 * 50;

            $notas10 = intdiv($valorSaque, 10);
            $valorSaque -= $notas10 * 10;

            $notas5 = intdiv($valorSaque, 5);
            $valorSaque -= $notas5 * 5;

            print "
                <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
                <ul>
                    <li>R$100,00 x$notas100</li>
                    <li>R$50,00 x$notas50</li>
                    <li>R$10,00 x$notas10</li>
                    <li>R$5,00 x$notas5</li>
                </ul>
            ";


        ?>

    </section>
    
</body>
</html>

