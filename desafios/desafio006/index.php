<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Desafio 006 - Anatomia de uma Divisão</title>

    <link rel="stylesheet" href="./estilos/style.css">

</head>
<body>

    <?php


        $dividendo = $_POST['dividendo'] ?? 0;
        $divisor = $_POST['divisor'] ?? 0;


    ?>

    <header>
        <h1>Anatomia de uma Divisão:</h1>
    </header>

    <main>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">

            <input type="submit" value="Analisar">

        </form>

    </main>

    <section>

        <h2>Estrutrura da Divisão</h2>

        <?php

            $resto = $dividendo % $divisor;
            $quociente = intdiv($dividendo, $divisor);

            print "
                <p>Dividendo: $dividendo | Divisor: $divisor </p>
                <p>Resto: $resto | Quociente: $quociente</p>
            ";

        ?>

    </section>
    
</body>
</html>

