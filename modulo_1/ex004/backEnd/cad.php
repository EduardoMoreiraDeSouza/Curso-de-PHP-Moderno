<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Resultado</title>

    <link rel="stylesheet" href="../estilos/style.css">

</head>
<body>

    <header>
        <h1>Resultado do Processamento:</h1>
    </header>

    <main>
    
        <?php

            if (!isset($_POST['nome']) or !isset($_POST['sobrenome'])) {

                echo "<p>Ops! Não foi enviado nenhum formulário!</p>";

            } else {

                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
    
                echo "<p>Olá! É um prazer te conhecer, <strong>$nome $sobrenome!</strong></p>";

            }

        ?>

        <p><a href="javascript:history.go(-1)">Página Anterior</a></p>

    </main>
    
</body>
</html>

