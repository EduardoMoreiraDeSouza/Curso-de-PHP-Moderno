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

                $dataInicio = date('m-d-Y', strtotime('-7 days'));
                $dataFim = date('m-d-Y');

                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataFim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados['value'][0]['cotacaoCompra'];

                $valor = $_POST['valor'];
                $dolar = $cotacao;
                $valorConvertido = numfmt_format_currency($padrao, ($valor / $dolar), 'USD');

                $valorFormatado = numfmt_format_currency($padrao, $valor, 'BRL');

                echo "<p>Seus $valorFormatado equivalem a <strong>$valorConvertido</strong></p>";
                echo "<p>Cotação obtida diretamente do site do <a href='https://www.bcb.gov.br/' target='_blank'>Banco Central do Brasil</a></p>";

            }

        ?>

        <button onclick="javascript:window.location.href='../index.html'">&#x2B05; Voltar</button>
        
        <!-- <p><a href="javascript:history.go(-1)">Página Anterior</a></p> -->

    </main>
    
</body>
</html>

