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

            if (!isset($_POST['valor'])) {

                echo "<p>Ops! Não foi enviado nenhum formulário!</p>";

            } else {

                $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

                $valor = $_POST['valor'];
                $dolar = 5.22;
                $valorConvertido = numfmt_format_currency($padrao, ($valor / $dolar), 'USD');

                $valorFormatado = numfmt_format_currency($padrao, $valor, 'BRL');

                echo "<p>Seus $valorFormatado equivalem a <strong>$valorConvertido</strong></p>";
                echo "<p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código</p>";

            }

        ?>

        <button onclick="javascript:window.location.href='../index.html'">&#x2B05; Voltar</button>
        
        <!-- <p><a href="javascript:history.go(-1)">Página Anterior</a></p> -->

    </main>
    
</body>
</html>

