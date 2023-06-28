<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 012 - Calculadora de Tempo</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php

        $segundosUsuario = $_POST['segundos'] ?? 0;
        $segundos = $segundosUsuario;

    ?>

    <header>
        <h1>Calculadora de Tempo:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">

        </form>

    </main>

    <section>

        <h2>Totalizando Tudo</h2>

        <?php


            $segundosSemanas = 604800;
            $semanas = intdiv($segundos, $segundosSemanas);
            $segundos = $segundos % $segundosSemanas;


            $segundosDias = 86400;
            $dias = intdiv($segundos, $segundosDias);
            $segundos = $segundos % $segundosDias;
            
            $segundosHoras = 3600;
            $horas = intdiv($segundos, $segundosHoras);
            $segundos = $segundos % $segundosHoras;

            $segundosMinutos = 60;
            $minutos = intdiv($segundos, $segundosMinutos);
            $segundos = $segundos % $segundosMinutos;

            $segundosUsuario = number_format($segundosUsuario, 0, ',', '.');

            print "
                <p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:</p>
                <ul>
                    <li>$semanas Semanas</li>
                    <li>$dias Dias</li>
                    <li>$horas Horas</li>
                    <li>$minutos Minutos</li>
                    <li>$segundos Segundos</li>
                </ul>
            ";


        ?>

    </section>
    
</body>
</html>

