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

            if (!isset($_POST['numero'])) {

                echo "<p>Ops! Não foi enviado nenhum formulário!</p>";

            } else {

                $numeroReal = number_format($_POST['numero'], 3, ',', '.');
                $separadorDecimal = strpos($numeroReal, ",");
                $parteFracionaria = "0".substr($numeroReal, $separadorDecimal);
                $numeroInteiro = substr($numeroReal, 0, $separadorDecimal);
                
                echo "<p>Analisando o número <strong>$numeroReal</strong> informado pelo usuário:</p>";

                echo "
                    <ol style='list-style-type: circle'>
                        <li><p>A parte inteira do número é <strong>$numeroInteiro</strong></p></li>
                        <li><p>A parte fracionária do número é <strong>$parteFracionaria</strong></p></li>
                    </ol>"; 

            }

        ?>

        <button onclick="javascript:window.location.href='../index.html'">&#x2B05; Voltar</button>
        
        <!--<p><a href="javascript:history.go(-1)">Página Anterior</a></p> -->

    </main>
    
</body>
</html>

