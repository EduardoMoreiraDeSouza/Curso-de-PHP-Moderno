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

        <h1>Resultado Final:</h1>
    
        <p><?php

            if (!isset($_POST['numero']) or empty($_POST['numero'])) {

                echo "<p>Ops! Não foi enviado nenhum formulário!</p>";

            } else {

                $numero = $_POST['numero'];
                $sucessor = $numero + 1;
                $antecessor = $numero - 1;
    
                echo "<p>Número escolhido: <strong>$numero</strong></p>";
                echo "<p>Seu antecessor: <strong>$sucessor</strong></p>";
                echo "<p>Seu sucessor: <strong>$antecessor</strong></p>";

            }

        ?></p>

        <button onclick="javascript:window.location.href='../index.html'">&#x2B05; Voltar</button>
        
        <!-- <p><a href="javascript:history.go(-1)">Página Anterior</a></p> -->

    </main>
    
</body>
</html>

