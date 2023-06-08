<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 002 - Números Aleatórios</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <header>
        <h1>Desafio 002 - Números Aleatórios</h1>
    </header>

    <main>
        
        <h1>Trabalhando Com Números Aleatórios</h1>
    
        <?php

            $numeroAleatorio = mt_rand(0, 100);

            echo "<p>Gerando um número aleatório entre 0 a 100...</p>";
            echo "<p>O valor gerado foi: $numeroAleatorio</p>";

        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro Número</button>

    </main>

    
</body>
</html>

