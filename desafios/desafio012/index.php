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


            $semanas = 0;
            $segundosSemanas = 604800;

            while ($segundos >= $segundosSemanas) {

                $semanas += 1;
                $segundos -= $segundosSemanas;

            }

            $dias = 0;
            $segundosDias = 86400;
            
            while ($segundos >= $segundosDias) {

                $dias += 1;
                $segundos -= $segundosDias;

            }

            $horas = 0;
            $segundosHoras = 3600;

            while ($segundos >= $segundosHoras) {

                $horas += 1;
                $segundos -= $segundosHoras;

            }


            $minutos = 0;
            $segundosMinutos = 60;

            while ($segundos >= $segundosMinutos) {

                $minutos += 1;
                $segundos -= $segundosMinutos;

            }


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

