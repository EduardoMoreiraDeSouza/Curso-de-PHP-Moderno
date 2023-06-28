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

        $segundosUsuario = $_POST['segundos'] ?? 0;
        $segundos = $segundosUsuario;

    ?>

    <header>
        <h1>Calculadora de Tempo:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>

        <h2>Saque de R$<?=$saque?> realizado</h2>

        <?php

            print "
                <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
                <ul>
                    <li>R$200,00</li>
                    <li>R$100,00</li>
                    <li>R$50,00</li>
                    <li>R$20,00</li>
                    <li>R$10,00</li>
                </ul>
            ";


        ?>

    </section>
    
</body>
</html>

