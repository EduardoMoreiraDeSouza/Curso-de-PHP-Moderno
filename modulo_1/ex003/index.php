<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>

    <?php

        $nome = "Eduardo Moreira"; // String
        $peso = 65.3; // Flutuante ou Real
        $idade = 21; // Inteiro
        $doenca = false; // Boleano
        
        var_dump($nome);
        echo "<br/>";
        
        var_dump($peso);
        echo "<br/>";
        
        var_dump($idade);
        echo "<br/>";

        var_dump($doenca);
        echo "<br/>";

        $vet = [6, 6.3, "Edu", false];
        var_dump($vet);
        echo "<br/>";


        class Pessoa {
            private string $nome;
        }

        $pessoa = new Pessoa;
        var_dump($pessoa)

    ?>

</body>
</html>