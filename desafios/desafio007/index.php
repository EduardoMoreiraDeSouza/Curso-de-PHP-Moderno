<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 007 - Salário Mínimo</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php

        $salarioMinimo = 1380;
        $salario = $_POST['salario'] ?? 0;

    ?>

    <header>
        <h1>Informe Seu Salário:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$dividendo?>" step='0.1'>

            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            
            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>

        <h2>Estrutrura da Divisão</h2>

        <?php

            $quantSalarios = intdiv($salario, 1380);
            $resto = number_format($salario - $salarioMinimo * $quantSalarios, 2, ',', '.');
            $salario = number_format($salario, 2, ',', '.');

            print "<p>Quem recebe um salário de R$$salario ganha <strong>$quantSalarios salários mínimos + R$$resto</strong></p>";

        ?>

    </section>
    
</body>
</html>

