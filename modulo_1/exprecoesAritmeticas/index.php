<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Expressões Aritméticas</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <header>
        <h1>Expressões Aritméticas</h1>
    </header>

    <main>

        <p>
    
            <?php

               /* Ordem de Precedência:

                    () |--> Parênteses.
                    ** |--> Potências.
                    * / % |--> Multiplicação, Divisão e Resto da Divisão Inteira.
                    + - |--> Soma e Subtração.
               
               */

                $res = 50 / 2 + 3 ** 2;
                echo "O resultado da expressão 50 / 2 + 3 ^ 2 é $res.";

            ?>

        </p>

    </main>
    
</body>
</html>

