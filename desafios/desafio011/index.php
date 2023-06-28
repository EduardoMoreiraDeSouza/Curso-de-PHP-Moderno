<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 011 - Reajustando Preços</title>

    <link rel="stylesheet" href="./estilos/style.css">

    <script>

        function exibirPorcentagem() {

            var porcentagemEscolhida = document.getElementById('porcentualAjuste').value
            document.getElementById('porcentagemEscolhida').innerHTML = "(" + porcentagemEscolhida + "%)"

        }

    </script>

</head>
<body>

    <?php

        $precoProduto = $_POST['precoProduto'] ?? 0;
        $porcentualAjuste = $_POST['porcentualAjuste'] ?? 0;


    ?>

    <header>
        <h1>Reajustando Preços</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="precoProduto">Preço do Produto (R$):</label>
            <input type="number" name="precoProduto" id="precoProduto" value="<?=$precoProduto?>">

            <label for="porcentualAjuste">Porcentual de Ajuste <span id="porcentagemEscolhida"></span></label>
            <input type="range" name="porcentualAjuste" id="porcentualAjuste" value="<?=$porcentualAjuste?>" min="0" max="100" onchange="exibirPorcentagem()">
            

            <input type="submit" value="Analisar">

        </form>

    </main>

    <section>

        <h2>Resultado do Reajuste</h2>

        <?php

            $reajuste = number_format($precoProduto + ($precoProduto / 100 * $porcentualAjuste), 2, ',', '.');
            $precoProduto = number_format($precoProduto, 2, ',', '.');

            print "
                <p>O produto que custava <strong>R$$precoProduto</strong>, com <strong>$porcentualAjuste % de aumento</strong>, vai passar a custar <strong>R$$reajuste</strong> a partir de agora.</p>
            ";

        ?>

    </section>

    <script>
        
        var porcentagemEscolhida = document.getElementById('porcentualAjuste').value
        document.getElementById('porcentagemEscolhida').innerHTML = "(" + porcentagemEscolhida + "%)"

    </script>
    
</body>
</html>

